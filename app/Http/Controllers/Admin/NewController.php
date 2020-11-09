<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Http\Requests\NewsRequest;
use app\Models\News;
use app\Models\News_Cat;

class NewController extends Controller
{
    public function index()
    {
        return view('admin.page.news.index');
    }

    public function getAdd()
    {
        return view('admin.page.news.createl');
    }

    public function postAdd(NewsRequest $request)
    {
       // $request->validated();

        // News::create([
        //     'Title' => $request->get("Title"),
        //     'Id_Blog_Cat' => $request->get("Title"),
        //     'Avatar' => $request->get("Title"),
        //     'Summary' => $request->get("Title"),
        //     'Content' => $request->get("Title"),
        //     'Checked' => $request->get("Title"),
        //     'Del_Flg' => $request->get("Title"),
        //     'Hight_Flg' => $request->get("Title"),
        //     'Status' => 1,
        //     'Slug' => $request->get("Title"),
        // ]);

        // return redirect()->route("adminBanner");
    }

    public function getEdit()
    {
        return view("admin.page.news.edit");
    }

    public function putEdit($id)
    {
        # code...
    }

    public function delete($id)
    {
        # code...
    }
}
