<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
       'room_type', 'availability', 'checkIndate', 'checkOutdate',
    ];

    public function roomType(){

     return $this->belongsTo('App\RoomType');
    }
}
