<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Room;
use App\Room_type;
use DB;
use Session;
class roomController extends Controller
{

    public function index(){

      $room_type= DB::table('room_types')           
            ->get();
      $room = DB::table('rooms')
            ->join('room_types', 'rooms.room_type', '=', 'room_types.id')
            ->select('*')
            ->limit(4)
            ->get();      

      return view('pages/index')->with([
        'room_type' => $room_type,
        'room'  => $room
      ]);

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

    public function getRoom()
    {
      $room=Room::all();
      $roomType=$users = DB::table('room_types')
      ->select('type')
      ->distinct()
      ->get();

      $index=1;

      // $bookedRoom=DB::table('checkrooms')
      // ->orderBy('checkIndate', 'desc')
      // ->get();
        $currentTime= date("Y-m-d");
        
       $bookedRoom = DB::table('checkrooms')
            ->join('rooms', 'checkrooms.room_id', '=', 'rooms.id')
            ->join('room_types','rooms.room_type','=','room_types.type')
            ->where('checkrooms.checkOutdate','>','$currentTime')
            ->orderBy('checkrooms.checkIndate','desc')
            ->select('*')    
            ->get();
        

      return view('admin/room')->with([
        'index'=> $index,
        'room'=>  $room,
        'roomType' => $roomType,
        'bookedRoom'=> $bookedRoom
      ]);
    }

    public function addRoom(Request $request)
    {
       $this->validate($request, [
            'type' => 'required|numeric',
            'availability' => 'required|max:1|numeric'    
        ]);  
       
       $room =  Room::create([
            
            'room_type' => $request['type'],
            'availability' => $request['availability']
         ]);
        Session::flash('flash_message','Room added successfully!!');
        return redirect()->back();
    }
    public function editRoom($id)
    {
      $id=decrypt($id);

      $room=Room::findOrfail($id);
      return view('admin/editRoom')->with([
        'room' => $room
      ]);
    }
    public function deleteRoom($id)
    {
      return $id;
    }




}
