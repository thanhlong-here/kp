<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasParent;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
class Contact extends Model
{
    use HasFactory, HasParent, SoftDeletes;


    protected $guarded  = ['id'];

    public function receiver()
    {
        return  $this->belongsTo(User::class);
    }

    public function sender()
    {
        return  $this->belongsTo(User::class);
    }



    public function scopeInbox($query, User $user)
    {
        return $query->whereReceiverId($user->id)->orWhere('sender_id',$user->id);
    }

    public function scopeSent($query, User $user)
    {
        return $query->whereParentId(0)->whereSenderId($user->id);
    }

    public function  scopeRooms($query, User $user)
    {
        return $query->whereSenderId($user->id)->orWhere('receiver_id',$user->id)->wherePrefix('message');
    }

    public static function joinRoom(User $user, User $with)
    {
        $cond = [$user->id, $with->id];
        $room = static::whereIn('sender_id', $cond)
            ->whereIn('receiver_id', $cond)
            ->firstOr(function () use ($user, $with) {
                return static::create([
                    'sender_id' => $user->id,
                    'receiver_id' => $with->id,
                    'title' =>  uniqid()
                ]);
            });
        $room->update([
            'updated_at' => Carbon::now()
        ]); 
        return $room;
    }
}
