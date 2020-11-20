<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog_Cats;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blog_Cats::where(["del_flg" => "1","status" => "1"])->paginate(10);
        return view('admin.page.blog-category.index',[
            'cates' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Blog_Cats::where(["del_flg" => "0"])->paginate(10);
        $categoryList = Blog_Cats::where(["del_flg" => "1"])->get();


        return view('admin.page.blog-category.create',[
            'data' => $data,
            'cates' => $categoryList
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog_Cats();
        $filename = $request->Avatar->getClientOriginalName();
        $blog->title = $request->get("Title");
        $blog->title_en = $request->get("Title_en");
        $blog->parent_id = $request->get("parent_id");
        $blog->summary = $request->get("Summary");
        $blog->summary_en = $request->get("Summary_en");
        $blog->meta_description = $request->get("Meta_Desc");
        $blog->meta_title = $request->get("Meta_Title");
        $blog->del_flg = $request->get("Del_Flg");
        $blog->status = 1;
        $blog->slug = $request->get("Slug");
        $blog->vi_tri = $request->get("vi-tri");
        $blog->position = $request->get("Position");
        $blog->avatar = $filename;
        $request->Avatar->storeAs('public/upload/img/cate-form',$filename);  
        $blog->save();

        return redirect()->back()->with(["toastrInfo" => ["type" => "success", "messenger" => "Lưu thành công"]]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog_Cats  $blog_Cats
     * @return \Illuminate\Http\Response
     */
    public function show(Blog_Cats $blog_Cats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog_Cats  $blog_Cats
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate = Blog_Cats::findOrFail($id);
        $categoryList = Blog_Cats::where(["del_flg" => "1", "parent_id" => "0"])->get();

        return view("admin.page.blog-category.edit",[
            "data" => $cate,
            "cates" => $categoryList
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog_Cats  $blog_Cats
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog_Cats::findOrFail($id);
      
        $filename = $request->Avatar->getClientOriginalName();
        $blog->title = $request->get("Title");
        $blog->title_en = $request->get("Title_en");
        $blog->parent_id = $request->get("parent_id");
        $blog->summary = $request->get("Summary");
        $blog->summary_en = $request->get("Summary_en");
        $blog->meta_description = $request->get("Meta_Desc");
        $blog->meta_title = $request->get("Meta_Title");
        $blog->del_flg = $request->get("Del_Flg");
        $blog->status = 1;
        $blog->slug = $request->get("Slug");
        $blog->vi_tri = $request->get("vi-tri");
        $blog->position = $request->get("Position");
        $blog->avatar = $filename;
        $request->Avatar->storeAs('public/upload/img/cate-form',$filename);  
        $blog->save();

        return redirect()->back()->with(["toastrInfo" => ["type" => "success", "messenger" => "Lưu thành công"]]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog_Cats  $blog_Cats
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog_Cats::find($id);
        $blog->del_flg = 0;
        $blog->save();
        return redirect()->back()->with(["toastrInfo" => ["type" => "success", "messenger" => "Xóa thành công"]]);
    }
}
