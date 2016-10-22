<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room_type extends Model
{
	protected $table='room_types';

    protected $fillable = [
        'price', 'guest', 'bed', 'sofa','size','room_description',
    ];



   public function room(){
       return $this->hasMany('\App\Room');
   }
}
