<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCats;
use Illuminate\Support\Str;
use App\Http\Requests\AddPostsRequest;
use App\Http\Requests\EditPostsRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function getPosts(){    
        // $data['post'] = DB::table('theposts')->join('thepost_cats','theposts.id_thepost_cat','=','thepost_cats.id')->orderBy('theposts.id','desc')->get();
        // $data['productlist'] = DB::table('vp_products')->join('vp_categories','vp_products.prod_cate','=','vp_categories.cate_id')->orderBy('prod_id','desc')->get();
        $data['post']= Post::all(); 
        $data['postcatslist'] = PostCats::all();
        return view('admin.page.posts.posts',$data);
    }
    public function getAddPosts(){    
        $data['postcatslist'] = PostCats::all();
        return view('admin.page.posts.addposts',$data);
    }
    public function postAddPosts(AddPostsRequest $request)
    {
            $filename = $request->img->getClientOriginalName();
            $posts = new Post;
            $posts->title = $request->title;
            $posts->title_en = $request->title_en;
            $posts->address = $request->address;
            $posts->slug = str::slug($request->slug);
            $posts->summary = $request->summary;
            $posts->summary_en = $request->summary_en;
            $posts->price = $request->price;
            $posts->content = $request->content;
            $posts->content_en = $request->content_en;
            $posts->meta_title = $request->meta_title;
            $posts->meta_description = $request->meta_description;
            $posts->status = $request->status;
            $posts->del_flg = $request->del_flg;
            $posts->hight_flg = $request->hight_flg;
            $posts->position = $request->position;
            $posts->rating = $request->rating;
            $posts->discount = $request->discount;
            $posts->id_thepost_cat = $request->id_thepost_cat;
            $posts->avatar = $filename;
            $request->img->storeAs('public/upload/img/posts',$filename);         
            $posts->save();
            return back();
    }
    
    public function getEditPosts($id){
        $data['post'] = Post::find($id);
        $data['listpostcats'] = PostCats::all();
        return view('admin.page.posts.editposts',$data);
    }
    public function postEditPosts(EditPostsRequest $request,$id){
        $post = new Post();
        $arr['title'] = $request->title;
        $arr['title_en'] = $request->title_en;
        $arr['slug'] = str::slug($request->slug);
        $arr['address'] = $request->address;
        $arr['summary'] = $request->summary;
        $arr['summary_en'] = $request->summary_en;
        $arr['content'] = $request->content;
        $arr['content_en'] = $request->content_en;
        $arr['price'] = $request->price;
        $arr['meta_title'] = $request->meta_title;
        $arr['meta_description'] = $request->meta_description;
        $arr['del_flg'] = $request->del_flg;
        $arr['status'] = $request->status;
        $arr['hight_flg'] = $request->hight_flg;
        $arr['position'] = $request->position;
        $arr['rating'] = $request->rating;
        $arr['discount'] = $request->discount;
        $arr['id_thepost_cat'] = $request->id_thepost_cat;
        if($request->hasFile('img')){
            $img = $request->img->getClientOriginalName();
            $arr['avatar'] = $img;
            $request->img->storeAs('public/upload/img/posts',$img);
        }
        $post::where('id',$id)->update($arr);
        return redirect('admin/posts');
    }
    public function getDeletePosts($id){
            Post::destroy($id);
            return back();
    }
    
}
