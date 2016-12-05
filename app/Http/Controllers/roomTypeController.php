<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room_type;
use Session;
use App\Http\Requests;

class roomTypeController extends Controller
{
    public function editRoomType($id)
    {	
    	$roomType=Room_type::findOrfail($id);

    	return view('admin.editRoomType')->with([
    		'roomType' => $roomType
    	]);
    }

    public function postEdit(Request $request,$id){
    	

    	$this->validate($request, [
          
            'price' => 'int|required',
            'guestCapacity' => 'required',
            'bed' => 'max:4|required',
            'sofa' => 'max:6|required',
            'size' => 'required',
            'room_description' => 'required',
            

        ]);
        
    
        if ($request->hasFile('room_image')) {

        	$image = $request->file('room_image');
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $destination_path = 'room_images/';
            $image_url ='/' .$destination_path . $image_full_name;
            $success = $request->file('room_image')->move($destination_path, $image_full_name);

           
            if ($success) {               
               	$id=decrypt($id);

       			$roomtype=Room_type::findOrfail($id);
         
                $roomtype->price = $request->price;
                $roomtype->guest = $request->guestCapacity;
                $roomtype->bed = $request->bed;
                $roomtype->sofa = $request->sofa;
                $roomtype->size = $request->size;
                $roomtype->room_description = $request->room_description;
                $roomtype->room_image = $image_url;

	       		$saveData= $roomtype->save();
	       		
	            if ($saveData) {
	                    Session::flash('flash_message','Your data has been updated!!');
	                    return redirect('admin/roomtype');
	            }  
	                
	        }
    	}else{
    			$id=decrypt($id);

       			 $input = $request->all();
        		$data=Room_type::findOrfail($id);
		        if(is_null($data)){
		            abort(404);
		        }
		      $saveData=  $data->update($input);
         
              
	       		
	            if ($saveData) {
	                    Session::flash('flash_message','Your data has been updated!!');
	                    return redirect('admin/roomtype');
	            }  
    	}
	}
    public function deleteRoomType($id)
    {
    	$roomType =Room_type::findOrfail($id);
    	if ($roomType == !null) {
    		$roomType->delete();
    		Session::flash('flash_message','Your data has been deleted!!');
    		return redirect()->back();
    	}
    	
    }
}
