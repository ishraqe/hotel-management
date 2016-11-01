<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Admin;
use Session;

class adminController extends Controller
{
    public function getLogin(){
    	return view('admin.login');	
    }

    public function postLogin(Request $request){

    	 $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
    	
          
        if (Auth::attempt(['email'=> $request['email'],'password'=>$request['password']])) {
            return redirect('/dashboard');
        }else{
           
            Session::flash('login_message','Something wrong with your credientials!');
        }
        
        return redirect()->back();

    }

    public function getRegister(){
        return view('admin.register');
    }
    public function postRegister(Request $request){
    	 $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:admins',
            'password' => 'required|min:6'
        ]);

         $admin =  Admin::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt(request()['password']),

         ]);
        Auth::login($admin);

        return redirect('/dashboard');
    }
    public function getDashboard(){
    	return view('admin.dashboard');
    }	
}
