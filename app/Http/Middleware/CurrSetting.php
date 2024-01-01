<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use App\Models\Device;
use App\Classes\Setting;
use Jenssegers\Agent\Agent;
use Closure;
use Session;


class CurrSetting
{

    public function handle($request, Closure $next)
    {
        $setting  =  Setting::get();
     
        app()->setLocale($setting->locale);
        $setting->agent = new Agent;
        //dd($request->token);
        if($request->token){
            $setting->device= Device::findToken($request->token);
        }
    
        Setting::set($setting);
        return $next($request);
    }
}
