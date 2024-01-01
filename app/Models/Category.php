<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasTree;
use App\Traits\HasTran;

class Category extends Model
{
  use HasFactory, HasTree , HasTran;
  protected $guarded  = ['id'];
  protected $touches  = ['avatar'];
  protected $slug     = 'name';

  public static function findName($name)
  {
    return Category::whereName($name)->first();
  }

  public static function scopePull($query, $code, $prefix = null)
  {
    return  $query->where('code', 'like', "$code%")->wherePrefix($prefix);
  }
  public function scopeSearch($query, $search)
  {
    if (isset($search->name)) {
      $query->where('name', 'like', "%$search->name%");
    }
    return $query;
  }

  public function scopeSo($query)
  {
    return $query->orderByDesc('priority')->orderByDesc('created_at');
  }

  public function extensions()
  {
    return Category::select('prefix')->distinct()->whereParentId($this->id)->get();
  }

  static function boot()
  {
    parent::boot();
    static::deleting(function ($model) {
      $model->dropLink();
      foreach ($model->medias as $media) {
        $media->delete();
      }
    });

    static::saving(function ($model) {
      $model->codeReal();
      $model->codeNotNull();
      //$model->haslink();
    });

    static::created(function ($model) {

      $model->upLink();
    });
  }
}
