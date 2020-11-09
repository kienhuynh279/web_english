<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Banner;
use App\Models\PostCats;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         // Hiển thị banner chung 
         $data['banner'] = Banner::all();
         view ()->share($data);

         $data['postcats'] = PostCats::all();
         view ()->share($data);
    }
}
