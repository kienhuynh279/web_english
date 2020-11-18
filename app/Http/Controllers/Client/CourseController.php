<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Post;
use App\Models\Blogs;
use App\Models\TestCategory;
use App\Models\PostCats;
use App\Models\Form;
use App\Models\FormCategory;

class CourseController extends Controller
{
    public function index()
    {
        $arr = [];
        $blogs = Blogs::where($arr)->paginate(12);
        return view('client.index', [
            'blogs' => $blogs,
            'title' => 'Docs',
            'page' => 'course.index',
        ]);
    }

    public function detail()
    {
        return view('client.index', [
            'title' => 'Docs',
            'page' => 'course.detail'
        ]);
    }

    public function list()
    {
        $cateName = PostCats::all();
        return view('client.index', [
            'title' => 'Docs',
            'page' => 'course.list',
            'data' => [
                'cateName' => $cateName
           ]
        ]);
    }
    
    public function getListPost($slug1, $slug2)
    {
        $postcat = PostCats::where('slug', $slug2)->first();
        $post = Post::where(['id_thepost_cat' => $postcat->id])->get();
        
        // $formcat = TestCategory::where('slug', $slug1)->first();
        // if ($formcat == true) {
        //     $cate = TestCategory::all();
        // }
        // $form = Form::all();
        
        // $id_theforms_cat = $form->get('id_theforms_cat');
        // dd($id_theforms_cat);
        // dd($id_theforms_cat);
        // $form = Form::where([substr($id_theforms_cat, 1, 2) => $formcat->id])->get();
        
        return view('client.index', [
            'title' => 'Ôn thi Ket',
            'page' => 'course.listpost',
            'data' => [
                'postcat' => $postcat,
                'post' => $post,
                // 'formcat' => $cate,
                // 'form' => $form,
           ]
        ]);
    }
}