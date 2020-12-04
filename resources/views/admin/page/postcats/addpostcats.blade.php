@extends('admin.master')
@section('title', 'Thêm Danh Mục ')
@section('main')
<!--/.row-->
<div class="row">
    <div class="col-sm-12 ">
        <div class="panel panel-primary">
            <div class="panel-body">
                @include('errors.note')
                <form method="post" enctype="multipart/form-data" role="form" action="">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-success" type="submit" name="submit"><i class="fas fa-save"></i> Thêm</button>
                                    <a href="{{ asset('admin/postcats') }}" class="btn btn-danger"><i class="fas fa-window-close"></i> Hủy bỏ</a>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Tên danh mục : </label>
                                        <input required type="text" id="title" name="title" class="form-control" placeholder="Tên Danh Mục...">
                                    </div>
                                    <div class="form-group">
                                        <label>English Category Name : </label>
                                        <input required type="text" id="title_en" name="title_en" class="form-control" placeholder="English Category Name...">
                                    </div>
                                    <div class="form-group">
                                        <label>Slug : </label>
                                        <input required type="text" id="slug" name="slug" class="form-control" placeholder="Slug...">
                                    </div>
                                    <div class="form-group">
                                        <label>Vị trí : </label>
                                        <select required name="vi_tri" class="form-control">
                                            <option value="0">Không thuộc mục nào</option>
                                            @foreach ($vtpostcats as $vt)
                                            <option value="{{$vt->id}}">{{$vt->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{-- <div class="form-group">
                                            <label>Del_flg (Admin)</label>
                                            <select required name="del_flg" class="form-control">
                                                <option value="0">Hiện</option>
                                                <option value="1">Không Hiện</option>
                                                
                                            </select>
                                        </div> --}}

                                    <div class="form-group">
                                        <label>Trạng thái (Client)</label>
                                        <select required name="status" class="form-control">
                                            <option value="1">Bật</option>
                                            <option value="0">Tắt</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Meta-Title : </label>
                                        <input required type="text" name="meta_title" class="form-control" placeholder="Meta-Title...">
                                    </div>
                                    <div class="form-group">
                                        <label>Meta-Description : </label>
                                        <input required type="text" name="meta_description" class="form-control" placeholder="Meta-Description ...">
                                    </div>

                                    <div class="form-group">
                                        <label>Position : </label>
                                        <input id="position" required type="text" name="position" class="form-control" placeholder="Position...">
                                    </div>
                                    <div class="form-group">
                                        <label>Tóm Lược: </label>
                                        <textarea required class="ckeditor" required name="summary"></textarea>
                                        <script type="text/javascript">
                                            var editor = CKEDITOR.replace('summary', {
                                                    language: 'vi',
                                                    filebrowserImageBrowseUrl: '../../plugins/editor/ckfinder/ckfinder.html?Type=Images',
                                                    filebrowserFlashBrowseUrl: '../../plugins/editor/ckfinder/ckfinder.html?Type=Flash',
                                                    filebrowserImageUploadUrl: '../../plugins/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                                    filebrowserFlashUploadUrl: '../../plugins/editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                                });

                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Summary English : </label>
                                        <textarea required class="ckeditor" required name="summary_en"></textarea>
                                        <script type="text/javascript">
                                            var editor = CKEDITOR.replace('summary_en', {
                                                    language: 'vi',
                                                    filebrowserImageBrowseUrl: '../../plugins/editor/ckfinder/ckfinder.html?Type=Images',
                                                    filebrowserFlashBrowseUrl: '../../plugins/editor/ckfinder/ckfinder.html?Type=Flash',
                                                    filebrowserImageUploadUrl: '../../plugins/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                                    filebrowserFlashUploadUrl: '../../plugins/editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                                });

                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label>Nội Dung: </label>
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
    $('input#title').keyup(function(event) {
            /* Act on the event */
            var title, slug;
            //Lấy text từ thẻ input title
            title = $(this).val();
            //Đổi chữ hoa thành chữ thường
            slug = title.toLowerCase();

            //Đổi ký tự có dấu thành không dấu
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            //Xóa các ký tự đặt biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi,
                '');
            //Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/ /gi, "-");
            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //Xóa các ký tự gạch ngang ở đầu và cuối
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            //In slug ra textbox có id “slug”
            $('input#slug').val(slug);
        });

</script>
@stop
