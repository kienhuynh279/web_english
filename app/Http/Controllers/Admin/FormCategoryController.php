<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FormCategory;
use Illuminate\Http\Request;

class FormCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cate = FormCategory::where(["del_flg" => "1"])->paginate(20);
        return view('admin.page.form-category.index',[
            "cates" => $cate
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = FormCategory::where(["del_flg" => "0"])->paginate(10);
        $categoryList = FormCategory::where(["del_flg" => "1"])->get();

        // $FormCategoryData = FormCategory::where(["del_flg" => "0", "parent_id" => "0"])->get();

        // foreach ($FormCategoryData as $item) $item->child = Category::where(["del_flg" => "0", "parent_id" =>  $item->id])->get();
        return view('admin.page.form-category.create',[
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
        $blog = new FormCategory();
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

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormCategory  $formCategory
     * @return \Illuminate\Http\Response
     */
    public function show(FormCategory $formCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormCategory  $formCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(FormCategory $formCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormCategory  $formCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormCategory $formCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormCategory  $formCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormCategory $formCategory)
    {
        //
    }
}