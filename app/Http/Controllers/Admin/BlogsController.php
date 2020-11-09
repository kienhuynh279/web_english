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

        $blog = new Blogs();

        $request->validated();

        $blog->title = $request->get("Title");
        $blog->title_en = $request->get("Title_en");
        $blog->id_blog_cat = $request->get("Cate_Id");
        $blog->avatar = $request->get("Avatar");
        $blog->summary = $request->get("Summary");
        $blog->summary_en = $request->get("Summary_en");
        $blog->content = $request->get("Content");
        $blog->content_en = $request->get("Content_en");
        $blog->checked = $request->get("Checked");
        $blog->meta_description = $request->get("Meta_Desc");
        $blog->meta_title = $request->get("Meta_Title");
        $blog->del_flg = $request->get("Del_Flg");
        $blog->hight_flg = $request->get("Hight_Flg");
        $blog->status = 1;
        $blog->slug = $request->get("Slug");
        $blog->position = $request->get("Position");
        $blog->save();

        return back();
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

    public function putEdit(BlogsRequest $request,$id)
    {
        $blog = Blogs::findOrFail($id);

        $request->validated();

        $blog->title = $request->get("Title");
        $blog->title_en = $request->get("Title_en");
        $blog->id_blog_cat = $request->get("Cate_Id");
        $blog->avatar = $request->get("Avatar");
        $blog->summary = $request->get("Summary");
        $blog->summary_en = $request->get("Summary_en");
        $blog->content = $request->get("Content");
        $blog->content_en = $request->get("Content_en");
        $blog->checked = $request->get("Checked");
        $blog->meta_description = $request->get("Meta_Desc");
        $blog->meta_title = $request->get("Meta_Title");
        $blog->del_flg = $request->get("Del_Flg");
        $blog->hight_flg = $request->get("Hight_Flg");
        $blog->status = 1;
        $blog->slug = $request->get("Slug");
        $blog->position = $request->get("Position");
        $blog->save();

        return redirect()->route("adminNew")->withErrors([
            "success" => "Chỉnh sửa dịch vụ thành công"
        ]);
    }

    public function delete($id)
    {
        # code...
    }
}
