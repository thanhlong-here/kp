<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Block;
use App\Traits\HasTree;
use App\Traits\HasLike;


class Post extends  Model
{
  use HasFactory, HasTree , HasLike;
  protected $guarded  = ['id'];
  protected $touches  = ['avatar'];
  protected $slug     = 'name';

  public function category()
  {
    return  $this->belongsTo(Category::class);
  }

  public function blocks(){
   
    return $this->morphMany(Block::class,'model');
    
  }

  public function scopeSearch($query, $search)
  {
    
    if (isset($search->name)) {
      $query->where('name', 'like', "%$search->name%");
    }
    if($search->is != 'post' ){
      $query->whereCategoryId(0);
    }else{
      $query->where('category_id', '<>', 0);
      if (isset($search->categories)) {
        $query->whereIn('category_id', $search->categories);
      }
    }

    return $query;
  }

  public function lang($lang){
    $tl = "trans_$lang";
   
    return json_decode($this->$tl);
  }

  public function propTrans($prop,$lang,$auto = true){
    $trans  = $this->lang($lang);
   
    if($auto) return empty($trans->$prop) ? $this->$prop : $trans->$prop;
    return empty($trans->$prop) ? '' : $trans->$prop;
  }

  public function scopeCategory($query,$category){
    $arr  = $category->path();
    $arr[]= $category->id;
    $query->whereIn('category_id', $arr);
    return $query;
  }

  public function scopeSo($query){
    return $query->orderByDesc('priority')->orderByDesc('created_at');
  }
  
  public static function boot()
  {
      parent::boot();
      static::deleting(function ($model) {
          foreach ($model->medias as $media) {
              $media->delete();
          }
          if ($model->avatar)
              $model->avatar->delete();
          if (isset($model->link))
              $model->link->delete();
      });

      static::saving(function ($model) {
          if (empty($model->code)) {
              $model->code  = uniqid();
          }
      });
      static::creating(function ($model) {
          if (static::whereCode($model->code)->exists()) {
            $model->code .= uniqid();
          }  
      });

      static::created(function ($model) {
        $model->upLink();
      });


  }
}
