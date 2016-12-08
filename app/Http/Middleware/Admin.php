<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use DB;
use Illuminate\Support\Facades\Auth;
class Admin
{
    
        public function handle($request, Closure $next){
            if (!Auth::guest() && Auth::user()->admin) {

            	  $time = DB::table('sessions')
	                 ->where('id', 1)
	                ->get();
            $timeout=  $time[0]->session_time_for_admin;
            	
            	if((time() - $request->session()->get('last_login_timestamp')) > $timeout) // 900 = 15 * 60  
		            {  //	$request->session()->flush();
		           		Auth::logout();

		           		 Session::flash('login_message', 'You were not active for'. $timeout.' minutes');
		                return redirect('/admin/login');
		           }	
                return $next($request);
            }
            return redirect('/admin/login');
        }
    
}
