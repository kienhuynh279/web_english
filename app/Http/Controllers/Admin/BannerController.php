<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\AddBannerRequest;
use App\Http\Requests\EditBannerRequest;

class BannerController extends Controller
{
    public function getBanner()
    {
        $data['bannerlist'] = Banner::where(["del_flg" => "0"])->orderBy("id", "desc")->paginate(10);
        return view('admin.page.banner.banner', $data);
    }
    public function getAddBanner()
    {
        return view('admin.page.banner.addbanner');
    }
    public function postAddBanner(AddBannerRequest $request)
    {
        $filename = $request->img->getClientOriginalName();
        $banner = new Banner;
        $banner->title = $request->title;
        $banner->title_en = $request->title_en;
        $banner->slug = str::slug($request->slug);
        $banner->summary = $request->summary;
        $banner->summary_en = $request->summary_en;
        $banner->content = $request->content;
        $banner->content_en = $request->content_en;
        $banner->link = $request->link;
        $banner->del_flg = 0;
        $banner->status = $request->status;
        $banner->type = $request->type;
        $banner->position = $request->position;
        $banner->meta_title = $request->meta_title;
        $banner->meta_description = $request->meta_description;
        $banner->avatar = $filename;

        $request->img->storeAs('public/upload/img/banner', $filename);
        $banner->save();
        return back();
    }
    public function getEditBanner($id)
    {
        $data['banner'] = Banner::find($id);
        return view('admin.page.banner.editbanner', $data);
    }
    public function postEditBanner(EditBannerRequest $request, $id)
    {

        $banner = new Banner();
        $arr['title'] = $request->title;
        $arr['title_en'] = $request->title_en;
        $arr['slug'] = str::slug($request->slug);
        $arr['summary'] = $request->summary;
        $arr['summary_en'] = $request->summary_en;
        $arr['content'] = $request->content;
        $arr['content_en'] = $request->content_en;
        $arr['link'] = $request->link;
        // $arr['del_flg'] = $request->del_flg;
        $arr['status'] = $request->status;
        $arr['type'] = $request->type;
        $arr['position'] = $request->position;
        $arr['meta_title'] = $request->meta_title;
        $arr['meta_description'] = $request->meta_description;
        if ($request->hasFile('img')) {
            $img = $request->img->getClientOriginalName();
            $arr['avatar'] = $img;
            $request->img->storeAs('public/upload/img/banner', $img);
        }
        $banner::where('id', $id)->update($arr);
        return redirect('admin/banner');
    }
    public function getDeleteBanner($id)
    {
        $banner = Banner::find($id);
        $banner->update(['del_flg' => '1']);
        return back();
    }
}