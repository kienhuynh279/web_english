@extends('admin.master')
@section('title','Thêm Người Dùng Admin')
@section('main')
<!--/.row-->
<div class="row">
    <div class="col-sm-12 ">
        <div class="panel panel-primary">
            <div class="panel-body">
                @include('errors.note')
                <form method="post" enctype="multipart/form-data" role="form" action="">
                    <div class="row" style="margin-bottom:40px">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-success" type="submit" name="submit"><i class="fas fa-save"></i> Thêm</button>
                                    <a href="{{asset('admin/user')}}" class="btn btn-danger"><i class="fas fa-window-close"></i> Hủy bỏ</a>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Tên người dùng : </label>
                                        <input required type="text" name="name" class="form-control" placeholder="Tên user...">
                                    </div>
                                    <div class="form-group">
                                        <label>Email : </label>
                                        <input required type="email" name="email" class="form-control" placeholder="Email user...">
                                    </div>
                                    <div class="form-group">
                                        <label>Nhập mật khẩu : </label>
                                        <input required  id="password" type="password" name="password" class="form-control" placeholder="Password user...">
                                    </div>
                                    <div class="form-group">
                                        <label>Nhập lại mật khẩu: </label>
                                        <input required type="password" name="passwordAgain" class="form-control" placeholder="Password Again...">
                                    </div>
                                    <div class="form-group">
                                        <label>Cấp độ User: </label>
                                        <input required type="text" name="level" class="form-control" placeholder="Password Again...">
                                    </div>
                                    <div class="form-group">
                                        <label>Hình đại diện :</label>
                                        <input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
                                        <img id="avatar" class="thumbnail" width="100px" src="{{asset('/dist/img/male.jpg')}}">
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

