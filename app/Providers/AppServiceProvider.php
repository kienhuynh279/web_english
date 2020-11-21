<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Banner;
use App\Models\Blogs;
use Illuminate\Pagination\Paginator;
use App\Models\PostCats;
use App\Models\Post;
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
        Paginator::useBootstrap();

        // Hiển thị banner chung
        $data['banner'] = Banner::all();
        view()->share($data);

        $data['postcats'] = PostCats::all();
        view ()->share($data);

        $data['post'] = Post::all();
        view ()->share($data);
        
        $data['blogs'] = Blogs::all();
        view ()->share($data);
    }
}