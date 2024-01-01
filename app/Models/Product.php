<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
//use App\Models\Category;
//use App\Traits\HasTree;
use App\Models\Post;
use App\Models\Form;

class Product extends Post
{
    public function finishProgess(){
        $progess['overview'] = empty($this->category_id) ? false : true;
        $progess['pricing']  = empty($this->price) ? false : true;
        $progess['description'] = empty($this->content) ? false : true;
        $progess['requirement'] = empty($this->requiment) ? false : true;
        $progess['gallery'] = empty($this->avatar) ? false : true;
        return $progess;
    }

    public function getExtServiceAttribute(){
       return isset($this->options) ? json_decode($this->options) : [];
    }
    public function getPriceFormatAttribute()
    {
        return number_format($this->price) . ' đ';
    }

    public function getDeliveryFormatAttribute()
    {
        return number_format($this->delivery) . ' ' . __('days');
    }

    public function getRevisionsFormatAttribute()
    {
        return number_format($this->revisions) . ' ' . __('times');
    }
    //times
   
    public function freelancer()
    {
        return $this->belongsTo(Freelancer::class, 'freelancer_id');
    }

    public function requiment(){
        return $this->morphOne(Form::class, 'model');
    }
    public function getRequiment(){
        if($this->requiment) return $this->requiment;
        return Form::create([
            'name' => $this->name,
            'model_type' =>  get_class($this),
            'model_id'   =>  $this->id,
        ]);
    }



    public function ext()
    {
        $ext =  $this->replicate();
        $ext->parent_id  = $this->id;
        return $ext;
    }

    public function sell()
    {
        $sold =  $this->ext();
        $sold->sold_at  = now();
        $sold->save();
        return $sold;
    }

    public function getPacks()
    {
        return $this->childs()->inventory();
    }

    public function scopeSold($query)
    {
        return  $query->whereNotNull('sold_at');
    }

    public function scopeInventory($query)
    {
        return  $query->whereNull('sold_at')->whereStatus('publish');
    }

    public function scopeSearch($query, $search)
    {
        if (isset($search->name)) {
            $query->where('name', 'like', "%$search->name%");
        }
        if (isset($search->categories)) {
            $query->whereIn('category_id', $search->categories);
        }
        if (isset($search->freelancer_id)) {
            $query->whereIn('freelancer_id', $search->freelancer);
        }
        if (isset($search->status)) {
         
            $query->whereStatus($search->status);
        }
        return $query;
    }

    public function scopeSo($query)
    {
        return $query->orderByDesc('priority')->orderByDesc('created_at');
    }
}
