<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use App\Models\FormCategory;
use Illuminate\Http\Request;

class MakeTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filter = [];
        $forms = Form::where($filter)->paginate(20);
        $formcate  = FormCategory::all();
        return view('admin.page.make-test.index',[
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
        $formcate  = FormCategory::all();
        return view('admin.page.make-test.create',[
            "cate" => $formcate
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
        //$arr = [];
        Form::create([
            "title" => $request->get("Title"),
            "title_en" => $request->get("Cate_Id"),
            //"avatar" => $request->get("Avatar"),
            "id_theforms_cat" => $request->get("Cate_Id"),
            "summary" => $request->get("Summary"),
            "summary_en" => $request->get("Summary_en"),
            'content' => json_encode(explode("-",$request->get("Content"))),
            //$arr = $request->get("Content"),
            "meta_description" => $request->get("Meta_Desc"),
            "meta_title" => $request->get("Meta_Title"),
            //"checked" => $request->get("Checked"),
            "del_flg" => $request->get("Del_Flg"),
            "hight_flg" => $request->get("Hight_Flg"),
            "slug" => $request->get("Slug"),
            "position" => $request->get("Position"),
            "rating" => $request->get("Rating"),
            "discount" => $request->get("Discount"),
            "status" => 1,
        ]);

        return redirect()->route("adminMakeTest")->withErrors([
            "success" => "Tạo ứng dụng thành công",
        ]);
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
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }
}