<?php

namespace App\Http\Controllers\Client;
use App\Models\Banner;
use App\Models\PostCats;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;

class HomeController extends Controller
{
    public function index()
<<<<<<< HEAD
    {   
        $form = Form::where('status', 1)->get();
        $data['banner'] = Banner::where('status',1)->get();
        $datacats['postcats']=PostCats::where('status',1)->get();
        return view('client.index',[
            'title' => 'Trang Chủ',
            'page' => 'home.index',
            'form' => $form,
            $data,
            $datacats
=======
    {
        return view('client.index',[
            'title' => 'Trang Chủ',
            'page' => 'home.index'
>>>>>>> 858c4066334e699d30b45c52fcaf002e3ccf1e9d
        ]);
    }

    public function getCategory($id)
    {
    //   $post= Post::where('id_thepost_cat',$id)->orderBy('theposts.id','desc')->paginate(8);
        // $data ['cateName'] = PostCats::find($id);
        return view('client.index', [
            'title' => 'Tài Liệu Ket',
            'page' => 'course.KET',
        //     'data' => [
        //         'post' => $post
        //    ]
        ]);
    }


   
}
