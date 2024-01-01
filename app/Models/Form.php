<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FormElement;
class Form extends Model
{
    use HasFactory;

    protected $guarded  = ['id'];
    public function elements()
    {
        return $this->hasMany(FormElement::class);
    }
    

}
