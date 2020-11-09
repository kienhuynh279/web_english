<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BlogsRequest;
use App\Models\Blogs;
use App\Models\Blog_Cats;

class BlogsController extends Controller
{
    public function index()
    {
        $filter = [];
        $blogs = Blogs::where($filter)->paginate(20);
        return view('admin.page.news.index', [
            "blogs" => $blogs
        ]);
    }

    public function getAdd()
    {
        $cate = Blog_Cats::all();
        return view("admin.page.news.createl",[
            "cate" => $cate
        ]);
    }

    public function postAdd(BlogsRequest $request)
    {

        $request->validated();

        Blogs::create([
            'title' => $request->get("Title"),
            'title_en' => $request->get("Title_en"),
            'id_blog_cat' => $request->get("Cate_Id"),
            'avatar' => $request->get("Avatar"),
            'summary' => $request->get("Summary"),
            'summary_en' => $request->get("Summary_en"),
            'content' => $request->get("Content"),
            'content_en' => $request->get("Content_en"),
            'checked' => $request->get("Checked"),
            'meta_description' => $request->get("Meta_Desc"),
            'meta_title' => $request->get("Meta_Title"),
            'del_flg' => $request->get("Del_Flg"),
            'hight_flg' => $request->get("High_Flg"),
            'status' => 1,
            'slug' => $request->get("Slug"),
            'position' => $request->get("Position"),
        ]);

        return redirect()->route("adminNew");
    }

    public function getEdit($id)
    {
        $cate = Blog_Cats::all();
        $blog = Blogs::findOrFail($id);

        return view("admin.page.news.edit")->with([
            "cate" => $cate,
            "blog" => $blog
        ]);
    }

    public function putEdit($id)
    {
        # code...
    }

    public function delete($id)
    {
        # code...
    }
}
