<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use App\Models\FormCategory;
use Illuminate\Http\Request;
use App\Models\TestCategory;
use App\Models\PostCats;

class MakeTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = Form::where(["del_flg" => "0"])->orderBy("id", "desc")->paginate(10);
        // $formcate  = PostCats::all();
        return view('admin.page.make-test.index', [
            "forms" => $forms,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = Form::all();

        $TestCategoryData = PostCats::where(["vi_tri" => "0"])->get();
        foreach ($TestCategoryData as $item) $item->child = PostCats::where(["vi_tri" =>  $item->id])->get();
        return view('admin.page.make-test.create', [
            "FormCategoryData" => $TestCategoryData,
            "form" => $blog
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
        $blog = new Form();

        if ($request->has('Avatar')) {
            $filename = $request->Avatar->getClientOriginalName();
            $request->Avatar->storeAs('public/upload/img/the_form', $filename);
            $blog->avatar = $filename;
        }

        $blog->title = $request->get("Title");
        $blog->title_en = $request->get("Title_en");
        $blog->id_theforms_cat = $request->get("Cate_Id");
        $blog->summary = $request->get("Summary");
        $blog->summary_en = $request->get("Summary_en");

        $blog->content = json_encode(explode("-", $request->get("Content")));
        $blog->del_flg = 0;
        $blog->hight_flg = $request->get("Hight_flg");
        $blog->status = $request->get("Status");
        $blog->slug = $request->get("Slug");
        $blog->position = $request->get("Position");
        $blog->time = $request->get('time');
        $blog->save();

        return redirect()->route("adminMakeTest");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $TestCategoryData = PostCats::where(["vi_tri" => "0"])->get();
        foreach ($TestCategoryData as $item) $item->child = PostCats::where(["vi_tri" =>  $item->id])->get();
        $blog = Form::findOrFail($id);

        return view("admin.page.make-test.edit")->with([
            "FormCategoryData" => $TestCategoryData,
            "form" => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Form::findOrFail($id);

        if ($request->has('Avatar')) {
            $filename = $request->Avatar->getClientOriginalName();
            $request->Avatar->storeAs('public/upload/img/the_form', $filename);
            $blog->avatar = $filename;
        }

        $blog->title = $request->get("Title");
        $blog->title_en = $request->get("Title_en");
        $blog->id_theforms_cat = $request->get("Cate_Id");
        $blog->summary = $request->get("Summary");
        $blog->summary_en = $request->get("Summary_en");
        $blog->content = $request->get("Content");
        $blog->meta_description = $request->get("Meta_Desc");
        $blog->meta_title = $request->get("Meta_Title");
        $blog->hight_flg = $request->get("Hight_Flg");
        $blog->status = $request->get("Status");
        $blog->slug = $request->get("Slug");
        $blog->position = $request->get("Position");
        $blog->save();

        return redirect()->route("adminMakeTest");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Form::find($id);
        $blog->del_flg = 1;
        $blog->save();
        return redirect()->back()->with(["toastrInfo" => ["type" => "success", "messenger" => "Xóa thành công"]]);
    }
}