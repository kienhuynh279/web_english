<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ModelUser;
use Illuminate\Http\Request;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\AddUserRequest;

class UserController extends Controller
{
    public function getUser(){    
        $data['userlist']= ModelUser::all(); 
        return view('admin.page.user.user',$data);
    }
    public function getAddUser(){    
        return view('admin.page.user.adduser');
    }
    public function postAddUser(AddUserRequest $request)
    {
            $filename = $request->img->getClientOriginalName();
            $user = new ModelUser;
            $user->username = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->level = $request->level;
            $user->avatar = $filename;
            $request->img->storeAs('public/upload/img/user',$filename);         
            $user->save();
            return back();

    }
    public function getEditUser($id){
        $data['user'] = ModelUser::find($id);
        return view('admin.page.user.edituser',$data);
    }
    public function postEditUser(EditUserRequest $request,$id){
        $user = new ModelUser();
        $arr['username'] = $request->username;
        $arr['email'] = $request->email;
        $arr['password'] = bcrypt($request->password);
        $arr['level'] = $request->level;
        if($request->hasFile('img')){
            $img = $request->img->getClientOriginalName();
            $arr['avatar'] = $img;
            $request->img->storeAs('public/upload/img/user',$img);
        }
        $user::where('id',$id)->update($arr);
        return redirect('admin/user');

    }
    public function getDeleteUser($id){
            ModelUser::destroy($id);
            return back();
    }
}
