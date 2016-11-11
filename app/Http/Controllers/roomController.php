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

    public function checkRoom(Request $request)
    {
      $this->validate($request, [
            'Check-In' => 'required',
            'Check-Out' => 'required',
            'guest' => 'required|min:1|max:10|numeric'
        ]);        
      $dateIn= date_create($request['Check-In']);
      $dateOut=date_create($request['Check-Out']);

      $userCheckInTime=date_format($dateIn,'Y-m-d ');
      $userCheckOutTime=date_format($dateOut,'Y-m-d '); 
     
        $bookedRooms = DB::table('checkrooms')
          ->where('checkOutdate', '>=', $userCheckInTime)   // here '2016-11-11' is the check in date
          ->where('checkIndate', '<=', $userCheckOutTime)    // here '2016-11-12' is the check out date
           ->get();

           $bookedRoomsID = [];
           foreach ($bookedRooms as $r) {
              array_push($bookedRoomsID, $r->room_id);
           }

           $availableRoom = DB::table('rooms')
           ->whereNotIn('id', $bookedRoomsID)
           ->get();

            foreach ($availableRoom as $availableRooms) {
                $roomId=$availableRooms->id;
                
            }

           return view('pages.available-room')->with([
              'availableRoom' => $availableRoom

            ]);

     
     


    }
    private function searchRoom($roomID){

    }




}
