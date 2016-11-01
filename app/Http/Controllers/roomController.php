<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use Carbon\Carbon;
use App\Room;
use App\RoomType;
use DB;
class roomController extends Controller
{

    public function index(){

       
        return view('pages/index');

    }
    public function welcome(){
      return view('welcome');
    }

    /**
     * @return string
     */
    public function room()
    {
       $room = DB::table('rooms')
            ->join('room_types', 'rooms.room_type', '=', 'room_types.id')
            ->select('*')
            ->get();
            

       return view('pages.rooms')->with([
           'room' => $room,


       ]);
    }




}
