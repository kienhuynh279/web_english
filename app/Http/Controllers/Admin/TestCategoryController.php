<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TestCategory;
use Illuminate\Http\Request;

class TestCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TestCategory::where(["del_flg" => "0"])->orderBy("id", "desc")->paginate(10);
        $categoryList = TestCategory::where(["del_flg" => "0"])->get();

        return view('admin.page.test-category.index', [
            "data" => $data,
            "category_list" => $categoryList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAdd()
    {
        $categoryList = TestCategory::where(["del_flg" => "0", "parent_id" => "0"])->get();

        return view('admin.page.test-category.add', [
            "category_list" => $categoryList
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
        $testCategory = new TestCategory($request->input());

        if ($request->input('status') == null) $testCategory['status'] = "off";

        $testCategory->save();

        return redirect()->route("adminTestCategory");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
        $testCategoryData = TestCategory::find($id);
        $categoryList = TestCategory::where(["del_flg" => "0", "parent_id" => "0"])->get();

        if ($testCategoryData === null) return abort(404);

        return view('admin.page.test-category.edit', [
            "data" => $testCategoryData,
            "category_list" => $categoryList
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

        $testCategory = TestCategory::find($id);

        if ($request->input('status') == null) $request->merge(['status' => "off"]);;

        $testCategory->update($request->input());

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
        $testCategory = TestCategory::find($id);
        $testCategory->update(['del_flg' => '1']);
        return redirect()->back()->with(["toastrInfo" => ["type" => "success", "messenger" => "Xóa thành công"]]);
    }
}