<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Http\Requests\AddPostCatsRequest;
use App\Http\Requests\EditPostCatsRequest;
use Illuminate\Http\Request;
use App\Models\PostCats;

class PostCatsController extends Controller
{
    public function getPostCats()
    {
        $data['postcats'] = PostCats::all();
        return view('admin.page.postcats.postcats', $data);
    }
    public function getAddPostCats()
    {
        $data['vtpostcats'] = PostCats::all();
        return view('admin.page.postcats.addpostcats', $data);
    }
    public function postAddPostCats(AddPostCatsRequest $request)
    {
        $filename = $request->img->getClientOriginalName();
        $postcats = new PostCats;
        $postcats->title = $request->title;
        $postcats->title_en = $request->title_en;
        $postcats->slug = str::slug($request->slug);
        $postcats->summary = $request->summary;
        $postcats->summary_en = $request->summary_en;
        $postcats->content = $request->content;

        $postcats->vi_tri = $request->vi_tri;
        $postcats->del_flg = 0;
        $postcats->status = $request->status;

        $postcats->position = $request->position;
        $postcats->meta_title = $request->meta_title;
        $postcats->meta_description = $request->meta_description;
        $postcats->avatar = $filename;

        $request->img->storeAs('public/upload/img/postcats', $filename);
        $postcats->save();
        return back();
    }
    public function getEditPostCats($id)
    {
        $data['postcats'] = PostCats::find($id);
        $data['vtpostcats'] = PostCats::all();
        return view('admin.page.postcats.editpostcats', $data);
    }
    public function postEditPostCats(EditPostCatsRequest $request, $id)
    {
        $banner = new PostCats();
        $arr['title'] = $request->title;
        $arr['title_en'] = $request->title_en;
        $arr['slug'] = str::slug($request->slug);
        $arr['summary'] = $request->summary;
        $arr['summary_en'] = $request->summary_en;
        $arr['content'] = $request->content;
        $arr['vi_tri'] = $request->vi_tri;
        // $arr['del_flg'] = $request->del_flg;
        $arr['status'] = $request->status;
        $arr['position'] = $request->position;
        $arr['meta_title'] = $request->meta_title;
        $arr['meta_description'] = $request->meta_description;
        if ($request->hasFile('img')) {
            $img = $request->img->getClientOriginalName();
            $arr['avatar'] = $img;
            $request->img->storeAs('public/upload/img/postcats', $img);
        }
        $banner::where('id', $id)->update($arr);
        return redirect('admin/postcats');
    }
    public function getDeletePostCats($id)
    {
        PostCats::destroy($id);
        return back();
    }
}