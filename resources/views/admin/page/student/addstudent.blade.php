@extends('admin.master')
@section('title', 'Thêm Học Viên ')
@section('main')
<!--/.row-->
<div class="row">
    <div class="col-sm-12 ">
        <div class="panel panel-primary">
            <div class="panel-body">
                @include('errors.note')
                <form method="post" enctype="multipart/form-data" role="form" action="">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-success" type="submit" name="submit"><i class="fas fa-save"></i> Thêm</button>
                                    <a href="{{ asset('admin/student') }}" class="btn btn-danger"><i class="fas fa-window-close"></i> Hủy bỏ</a>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Tên Học Viên : </label>
                                        <input required type="text" id="name" name="name" class="form-control" placeholder="Tên Học Viên...">
                                    </div>
                                    <div class="form-group">
                                        <label>Tóm Lược: </label>
                                        <textarea required class="ckeditor" required name="content"></textarea>
                                        <script type="text/javascript">
                                            var editor = CKEDITOR.replace('content', {
                                                    language: 'vi',
                                                    filebrowserImageBrowseUrl: '../../plugins/editor/ckfinder/ckfinder.html?Type=Images',
                                                    filebrowserFlashBrowseUrl: '../../plugins/editor/ckfinder/ckfinder.html?Type=Flash',
                                                    filebrowserImageUploadUrl: '../../plugins/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                                    filebrowserFlashUploadUrl: '../../plugins/editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                                });
                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh Danh Mục :</label>
                                        <input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
                                        <img id="avatar" class="thumbnail" width="200px" src="{{ asset('/dist/img/imgdefault.png') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ csrf_field() }}
                </form>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--/.row-->
</div>
<script>
CKEDITOR.editorConfig = function (config) {
    config.enterMode = CKEDITOR.ENTER_BR;
    config.autoParagraph = false;
    config.fillEmptyBlocks = false;
};
</script>
@stop
