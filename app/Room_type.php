<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room_type extends Model
{
	protected $table='room_types';

    protected $fillable = [
       'type', 'price', 'guest', 'bed', 'sofa','size','room_description','room_image',
    ];


    public function getImage() {
        return $this->room_image;
    }
  
}
