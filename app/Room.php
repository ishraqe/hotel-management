<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room_type;
class Room extends Model
{
	protected $table='rooms';

    protected $fillable = [
       'room_type', 'availability'
    ];


    
   
}
