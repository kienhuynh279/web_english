<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\TestResource;
use App\Models\Form;
use App\Models\FormCategory;
use Illuminate\Http\Request;
use App\Models\TestCategory;
use App\Models\PostCats;
use App\Models\Test;

class MakeTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $condition = ["del_flg" => "0"];

        $CategoryData = PostCats::where(["vi_tri" => "0"])->get();
        $CategoryData->selected = null;
        foreach ($CategoryData as $item) $item->child = PostCats::where(["vi_tri" =>  $item->id])->get();

        if ($request->filled('cate')) {
            array_push($condition, ['id_theforms_cat', $request->query('cate')]);
            $CategoryData->selected = $request->query('cate');
        }

        $forms = Form::where($condition)->orderBy("id", "desc")->paginate(10);

        return view('admin.page.make-test.index', [
            "forms" => $forms,
            "CategoryData" => $CategoryData
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
        $blog->content = $request->get("Content");
        $blog->del_flg = 0;
        $blog->hight_flg = $request->get("Hight_flg");
        $blog->status = $request->get("Status") ? 1 : 0;
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

        if (!isset(json_decode($blog->content, true)[0]['title'])) $blog->content = "[]";

        // lấy questtionData
        $question = str_replace("\\", "", $blog->content);
        $questionData = "[]";
        $questionList = json_decode($question, true);


        if (!empty($questionList)) {
            if (isset($questionList[0]['title'])) {
                $allQuestion = [];
                foreach ($questionList as $part) {
                    $allQuestion = array_merge($allQuestion, $part["questionList"]);
                }

                $questionData = json_encode(TestResource::collection(Test::find($allQuestion)));
                $questionData = str_replace("\\", "\\\\", $questionData);
            }
        }

        return view("admin.page.make-test.edit")->with([
            "FormCategoryData" => $TestCategoryData,
            "form" => $blog,
            "questionData" => $questionData
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
        $blog->status = $request->get("Status") ? 1 : 0;
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