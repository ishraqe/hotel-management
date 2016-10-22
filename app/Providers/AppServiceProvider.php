<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layout.main',function($view){

                $actual_link = substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", 22);
                    if ($actual_link==false) {
                        $actual_link='/';
                    }
                $view->with('actual_link', $actual_link);

               });

   

       

           
      
  
           
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
     

   
    }
}
