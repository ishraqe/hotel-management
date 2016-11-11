<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room_type;
class Room extends Model
{
	protected $table='rooms';
    protected $fillable = [
       'room_type', 'availability', 
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roomtype(){

     return $this->belongsTo('\App\Room_type','room_type');
    }
}
