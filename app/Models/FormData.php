<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class FormData extends Model
{
    use HasFactory;

    public function saveWith($doc){
        $item   =   static::storage($doc);
        if($this->doc){
            Storage::delete($this->doc);
        }
        $this->prefix   =  'doc';
        $this->string   =  static:: storage($doc);
        $this->save();
    }


    static function storage($doc)
    {
        $code   = uniqid('doc_');
        $name   = $code . "." . $doc->getClientOriginalExtension();
        $doc->storeAs('doc', $name);
        return  'doc/' . $name;
    }

    static function boot()
    {
        parent::boot();
        static::deleting(function ($model) {
            if(isset($model->doc)){
                Storage::delete($model->doc);
            }
        });
        static::saving(function ($model) {
            $model->detectCode( $model->prefix );
        });
    }
}
