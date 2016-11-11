<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;
use Validator;
class userController extends Controller
{

    public function getRegister(Request $request){

        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6'
        ]);

         $user =  User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt(request()['password']),

         ]);
         
        Auth::login($user);

        return redirect('welcome');


    }



    public function login(Request $request){
         
         
         $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        //   $this->validate($request, [
        //     'name' => 'required|max:255',
        //     'email' => 'required|email|max:255|unique:users',
        //     'password' => 'required|min:6'
        // ]);
        
        if ($validator->fails())
        {
             return redirect()->back()->withErrors($validator, 'loginErrors');
        }else{
             if (Auth::attempt(['email'=> $request['email'],'password'=>$request['password'],'active'=>1])) {

                 return redirect('welcome');
            }else{
                Session::flash('login_flash_message','There is something wrong with your credentials!');

                return redirect()->back();
            }
        }

       

         
       
       


    }

    public function logout(){

        Auth::logout();
        return redirect('/');
          
        
        
       
    }






}
