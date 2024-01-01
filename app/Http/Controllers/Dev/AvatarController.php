<?php

namespace App\Http\Controllers\Dev;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class AvatarController extends Controller
{
    public function change(Request $request)
    {
       
        if(!Auth::check()) return;
        if ($request->hasFile('avatar')) {
           
            $user   = Auth::user();
            $freelancer = $user->freelancerOrNew();
         
            $avatar = $request->file('avatar');
            $freelancer->storeAvatar($avatar);
            return $freelancer->avatar->src;
        }
       
    }
}
