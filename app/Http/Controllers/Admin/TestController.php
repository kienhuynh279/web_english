<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostCats;
use App\Models\Test;
use App\Models\TestCategory;
use Illuminate\Http\Request;

class TestController extends Controller
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
            array_push($condition, ['code', 'LIKE', $request->query('cate') . '%']);
            $CategoryData->selected = $request->query('cate');
        }

        if ($request->filled('k')) {
            array_push($condition, ['title', 'LIKE', '%' . $request->query('k') . '%']);
        }

        $data = Test::where($condition)->orderBy("id", "desc")->paginate(10);

        return view('admin.page.test.index', [
            "data" => $data,
            "CategoryData" => $CategoryData,
            "filter" => $request->query()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAdd()
    {
        $TestCategoryData = PostCats::where(["vi_tri" => "0"])->get();
        foreach ($TestCategoryData as $item) $item->child = PostCats::where(["vi_tri" =>  $item->id])->get();

        return view('admin.page.test.add', [
            "TestCategoryData" => $TestCategoryData
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postAdd(Request $request)
    {
        $test = new Test($request->input());

        if ($request->input('status') == null) $test['status'] = 0;
        else $test['status'] = 1;

        if ($request->input('high_flg') == null) $test['high_flg'] = 0;
        else $test['high_flg'] = 1;

        $test['del_flg'] = 0;

        $test->save();

        $test->update(["code" => $test->code . $test->id]);

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
        $TestCategoryData = PostCats::where(["vi_tri" => "0"])->get();
        $testData = Test::find($id);

        if ($testData === null) return abort(404);

        foreach ($TestCategoryData as $item) $item->child = PostCats::where(["vi_tri" =>  $item->id])->get();

        return view('admin.page.test.edit', [
            "TestCategoryData" => $TestCategoryData,
            "data" => $testData
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postEdit(Request $request, $id)
    {
        $test = Test::find($id);


        if ($request->status == null) $request->merge(['status' => 0]);
        else $request->merge(['status' => 1]);

        if ($request->input('high_flg') == null) $request->merge(['high_flg' => 0]);
        else $request->merge(['high_flg' => 1]);

        $test->update($request->input());

        return redirect()->back()->with(["toastrInfo" => ["type" => "success", "messenger" => "Lưu thành công"]]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $test = Test::find($id);
        $test->update(['del_flg' => '1']);
        return redirect()->back()->with(["toastrInfo" => ["type" => "success", "messenger" => "Xóa thành công"]]);
    }
}