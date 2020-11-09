<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
    public function index()
    {
        $data = Test::where(["del_flg" => "0"])->orderBy("id", "desc")->paginate(10);

        return view('admin.page.test.index', [
            "data" => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAdd()
    {
        $TestCategoryData = TestCategory::all();

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

        // $test->update(["code" => $test->code . $test->id]);

        return redirect()->route("adminTest");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
        $TestCategoryData = TestCategory::all();
        $testData = Test::find($id);

        if ($testData === null) return abort(404);

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

        if ($request->input('status') == null) $request->merge(['status' => 0]);
        else $request->merge(['status' => 1]);

        if ($request->input('high_flg') == null) $request->merge(['status' => 0]);
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