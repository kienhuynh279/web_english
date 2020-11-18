<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use App\Models\FormCategory;
use Illuminate\Http\Request;
use App\Models\TestCategory;

class MakeTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = Form::where(["del_flg" => "1"])->paginate(20);
        $formcate  = FormCategory::all();
        return view('admin.page.make-test.index', [
            "forms" => $forms,
            "cate" => $formcate
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $TestCategoryData = TestCategory::where(["del_flg" => "0", "parent_id" => "0"])->get();
        foreach ($TestCategoryData as $item) {
            $item->child = TestCategory::where(["del_flg" => "0", "parent_id" =>  $item->id])->get();
        }


        // $FormCategoryData = TestCategory::where(["del_flg" => "1", "parent_id" => "0"])->get();
        // foreach ($FormCategoryData as $item) {
        //     $item->child = TestCategory::where(["parent_id" =>  $item->id])->get();
        // }
        return view('admin.page.make-test.create', [
            "FormCategoryData" => $TestCategoryData
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
        $filename = $request->Avatar->getClientOriginalName();

        $blog->title = $request->get("Title");
        $blog->title_en = $request->get("Title_en");
        $blog->id_theforms_cat = $request->get("code");
        $blog->summary = $request->get("Summary");
        $blog->summary_en = $request->get("Summary_en");
        
        $blog->content = json_encode(explode("-", $request->get("Content")));
        $blog->meta_description = $request->get("Meta_Desc");
        $blog->meta_title = $request->get("Meta_Title");
        $blog->del_flg = $request->get("Del_Flg");
        $blog->hight_flg = $request->get("Hight_Flg");
        $blog->status = 1;
        $blog->slug = $request->get("Slug");
        $blog->position = $request->get("Position");
        $blog->avatar = $filename;
        $request->Avatar->storeAs('public/upload/img/the_form', $filename);
        $blog->save();

        return back();
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
        $cate = FormCategory::all();
        $blog = Form::findOrFail($id);

        return view("admin.page.make-test.edit")->with([
            "cate" => $cate,
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


        $filename = $request->Avatar->getClientOriginalName();

        $blog->title = $request->get("Title");
        $blog->title_en = $request->get("Title_en");
        $blog->id_theforms_cat = $request->get("Cate_Id");
        $blog->summary = $request->get("Summary");
        $blog->summary_en = $request->get("Summary_en");
        $blog->content = $request->json_encode(explode("-", $request->get("Content")));
       
     
        $blog->meta_description = $request->get("Meta_Desc");
        $blog->meta_title = $request->get("Meta_Title");
        $blog->del_flg = $request->get("Del_Flg");
        $blog->hight_flg = $request->get("Hight_Flg");
        $blog->status = 1;
        $blog->slug = $request->get("Slug");
        $blog->position = $request->get("Position");
        $blog->avatar = $filename;
        $request->Avatar->storeAs('public/upload/img/the_form', $filename);
        $blog->save();
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
        $blog->del_flg = 0;
        $blog->save();
        return redirect()->back()->with(["toastrInfo" => ["type" => "success", "messenger" => "Xóa thành công"]]);
    }
}