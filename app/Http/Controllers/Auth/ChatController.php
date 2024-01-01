<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{

    public function with(User $user, User $with)
    {
        $room   =  Contact::joinRoom($user, $with);
        $now    =   now()->timestamp;

        $group  =   $room->title;

        $user   =   Auth::user();
        $freelancer = $user->freelancerOrNew();
        $rooms   =   Contact::Rooms($user)->get();

        return view('auth.chat', compact('rooms', 'user', 'freelancer', 'group', 'now'));
    }

    public function Chat()
    {
        $user   =  Auth::user();
        $rooms  =  Contact::Rooms($user)->get();
        $freelancer = $user->freelancerOrNew();
      
        return view('auth.chat', compact('rooms', 'user', 'freelancer'));
    }
}
