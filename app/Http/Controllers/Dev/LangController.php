<?php

namespace App\Http\Controllers\Dev;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Classes\Setting;

class LangController extends Controller
{
   
    public function trans($lang)
    {
        $info   =   Setting::get();
        $info->locale   =   $lang;

        if(isset($info->device)){
            $info->device->update(['lang'=>$lang]);
        }
        Setting::set($info );
        return redirect()->back();
    }

}
