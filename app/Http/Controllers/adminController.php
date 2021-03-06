<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User;
use Session;
use DB;
use App\Room_type;


class adminController extends Controller
{   private $index=1;

    public function getLogin(){

        if (Auth::guest()) {
            //    $localIP = getHostByName(getHostName());
            // return $localIP;   
         
            return view('admin.login'); 
        }
        return redirect('/admin/dashboard');
         	
    }

    public function postLogin(Request $request){

    	 $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
    	
          
        if (Auth::attempt(['email'=> $request['email'],'password'=>$request['password']])) {

            if(Auth::user()->admin){
                $request->session()->put('last_login_timestamp',time());
             

                return redirect('/admin/dashboard');
            }else{
                 Session::flash('login_message','Something wrong with your credientials!');
            };
            
        }else{
           
            Session::flash('login_message','Something wrong with your credientials!');
        }
        
        return redirect()->back();

    }

    
    public function postRegister(Request $request){
            
    	 $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
            'admin_type' => 'required'

        ]);

         $admin =  User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'admin'     => 1,
            'admin_type' => $request['admin_type']

         ]);
        Session::flash('flash_message','Admin added successfully!!');

        return redirect('/admin/admins');
    }
    public function getDashboard(){
    	return view('admin.dashboard');
    }
    
    public function logout()
    {
        Auth::logout();

        return redirect('/admin/login');
    }
    public function getUsers()
    {
         $index=1;

        $user=User::all()
        ->where('admin',0)
        ->where('active',1);
       

        $pendingUser=User::all()
        ->where('admin',0)
        ->where('active',0);

        return view('admin.user')->with([
            'user' => $user,
            'index' => $index,
            'pendingUser' => $pendingUser
        ]);
    }
    public function makeUserActive($id)
    {   $id=decrypt($id);
        $user=User::findOrFail($id);
        
        if(is_null($user)){
                abort(404);
        }

        $user->active = 1;
    
        $user->save();
        return redirect()->back();
            
    }
    public function getAdmins()
    {   
        $index=1;
        $admin=User::all()
        ->where('admin',1);
        $session= DB::table('sessions')           
            ->get();
        $sessionTime=DB::table('sessions')->where('id',1)->get();    

        return view('admin.admin-list')->with([
            'admin' => $admin,
            'index'=> $index,
            'session' => $session,
            'sessionTime' =>$sessionTime
        ]);
    }
    public function adminProfile($id)
    {       
       if (Auth::user()->id != $id ) {
          abort(404);
       }    $index=1;
            $adminProfile=User::findOrFail($id);
            return view('admin.admin-profile')->with([
                'adminProfile' => $adminProfile,
                'index'    => $index
            ]);
    }
    public function adminDelete($id)
    {
        $id=decrypt($id);
        
        $userDelete=User::findOrfail($id)->delete();

        return redirect()->back();
        
    }
    public function getRoomtype()
    {   $index=1;  
        $roomType=Room_type::all();
        return view('admin.roomtype')->with([
            'roomType' => $roomType,
            'index'  => $index
        ]);    
    }

    public function changeSession(Request $request){
            return "hello";
    }	

    public function addRoomType(Request $request)
    {
        $this->validate($request, [
            'type' => 'int|required',
            'price' => 'int|required',
            'guestCapacity' => 'required',
            'bed' => 'max:4|required',
            'sofa' => 'max:6|required',
            'size' => 'required',
            'room_description' => 'required',
            'room_image' => 'required'

        ]);
        $image = $request->file('room_image');
        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $destination_path = 'room_images/';
            $image_url ='/' .$destination_path . $image_full_name;
            $success = $request->file('room_image')->move($destination_path, $image_full_name);

           
            if ($success) {
                
                $roomtype = new Room_type;

                $roomtype->type = $request->type;
                $roomtype->price = $request->price;
                $roomtype->guest = $request->guestCapacity;
                $roomtype->bed = $request->bed;
                $roomtype->sofa = $request->sofa;
                $roomtype->size = $request->size;
                $roomtype->room_description = $request->room_description;
                $roomtype->room_image = $image_url;

               $saveData= $roomtype->save(); 
               if ($saveData) {
                    Session::flash('flash_message','Your data has been added!!');
                    return redirect()->back();
                 }  
                
            }
        }
    }
}
