<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Carbon\Carbon;
use App\Room;
use App\RoomType;

class roomController extends Controller
{

    public function index(){

        $rooms=Room::all();


        return view('pages/rooms')->with([
           'rooms' => $rooms
        ]);

    }

    /**
     * @return string
     */
    public function room()
    {
        $rooms=Room::all();


        return view('pages.rooms')->with([
            'rooms' => $rooms,


        ]);
    }
//    public function checkRoom(Request $request)
//    {
//
//
////    	$checkin =Carbon::createFromFormat('d/m/y',$request['Check-In']) ;
////        $checkOut=Carbon::createFromFormat('d/m/y',$request['Check-Out']) ;
//        $guest=$request['quest'];
//
//
//
//        return view('pages/rooms')->with([
////            'checkin' => $checkin,
////            'checkOut' => $checkOut,
//            'guest'  => $guest,
//        ]);
    //}



}
