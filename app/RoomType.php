<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $fillable = [
        'price', 'guest', 'bed', 'sofa','size','room_description',
    ];



    public function room(){
        return $this->hasMany('\App\Room');
    }
}
