@extends('admin.master')
@section('title','Chỉnh Sửa Người Dùng Admin')
@section('main')
<div style="padding-left: 10px">
    <div class="row">
         <div class="col-sm-12 ">
              <div class="panel panel-primary">
        
                   <div class="panel-body">
                        @include('errors.note')
                        <form method="post" type="hidden">
                             <div class="row" style="margin-bottom:40px">
                                  <div class="col-sm-12">
                                       <div class="card">
                                            <div class="card-header">
                                                 <button class="btn btn-success" onclick="return confirm('Bạn đã chắc chắn nhập lại mật khẩu chưa ?')"  type="submit" name="submit"><i class="fas fa-save"></i> Lưu</button>
                                                 <a href="{{asset('admin/user')}}" class="btn btn-danger"><i class="fas fa-window-close"></i> Hủy bỏ</a>
                                            </div>
                                            <div class="card-body">
                                                 <div class="form-group">
                                                      <label>Tên người dùng :</label>
                                                      <input id="username" required type="text" name="username" class="form-control" value="{{$user->username}}">
                                                 </div>
                                                 <div class="form-group">
                                                      <label>Email :</label>
                                                      <input id="email" required type="email" name="email" class="form-control" value="{{$user->email}}">
                                                 </div>
                                                 <div class="form-group">
                                                    <label>Mật Khẩu : <a style="color: red">(Đề nghị nhập lại Password để đảm bảo an toàn):</a></label>
                                                    <input id="password" required type="password" name="password" class="form-control" value="{{$user->password}}">
                                                  </div>
                                                  <div class="form-group">
                                                       <label>Nhập lại mật khẩu: </label>
                                                       <input required type="password" id="passwordAgain" name="passwordAgain" class="form-control" >
                                                   </div>
                                               <div class="form-group">
                                                <div class="form-group">
                                                    <label>Cấp độ User</label>
                                                    <input id="level" required type="text" name="level" class="form-control" value="{{$user->level}}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Hình đại diện :</label>
                                                    <input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
                                                    <img id="avatar" class="thumbnail" width="100px" src="{{Storage::url('public/upload/img/user/'.$user->avatar)}}">
                                                </div>

                                            </div>
                                       </div>
                                  </div>
                             </div>
                             {{(csrf_field())}}
                        </form>
                        <div class="clearfix"></div>
                   </div>
              </div>
         </div>
    </div>
    <!--/.row-->
</div>
<script>
     $('#password').on('input',function(){
        // console.log(this.value);
        this.value=this.value.replace(/[^([a-zA-Z0-9)]+/g, '');
      });
 </script>
@stop