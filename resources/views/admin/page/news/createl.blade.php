@extends('admin.master')
@section('title','Thêm Blogs')
@section('main')
<form enctype="multipart/form-data" id="main" action="{{ route('adminNewPostAdd') }}" method="POST" novalidate>
    @csrf

    <div class="card">
        <div class="card-header">
            <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Lưu</button>
            <a href="{{ route('adminNew') }}" class="btn btn-danger"><i class="fas fa-window-close"></i> Hủy bỏ</a>
        </div>
        <div class="card-body d-flex flex-wrap">
            <div class="form-group col-sm-6">
                <label for="example-select">Chọn loại tin tức</label>
                <select class="form-control" name="Cate_Id" id="code">
                    <option value="" aria-readonly="true">Ấn để chọn</option>
                    @foreach ($cate as $item)
                    <optgroup label="{{ $item->title }}">
                        @foreach($item->child as $child_item)
                        <option
                            value="1{{ ($item->id > 9 ? $item->id : "0".$item->id).($child_item->id > 9 ? $child_item->id : "0".$child_item->id)}}">
                            {{ $child_item->title }}</option>
                        @endforeach
                    </optgroup>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-6 px-3">
                <label class="w-100" for="title">Title</label>
                <div class="w-100">
                    <input type="text" id="title" name="Title" class="form-control" placeholder="Tiêu đề">
                </div>
                <div class="col-lg-12 messages text-danger"></div>
            </div>
            <div class="form-group col-md-6 px-3">
                <label class="w-100" for="tittle_en">Title English</label>
                <div class="w-100">
                    <input type="text" id="title_en" name="Title_en" class="form-control"
                        placeholder="Tiêu đề bằng tiếng anh">
                </div>
                <div class="col-lg-12 messages text-danger"></div>
            </div>

            <div class="form-group col-sm-6">
                <label>Ảnh Đại Diện :</label>
                <input required id="img" type="file" name="Avatar" class="form-control hidden"
                    onchange="changeImg(this)">
                <img id="avatar" class="thumbnail" width="200px" src="{{ asset('/dist/img/imgdefault.png') }}">
            </div>

            <div class="form-group col-md-6 px-3">
                <label class="w-100" for="slug">Slug</label>
                <div class="w-100">
                    <input type="text" id="slug" name="Slug" class="form-control" placeholder="Slug">
                </div>
                <div class="col-lg-12 messages text-danger"></div>
            </div>
            <div class="form-check col-md-3 px-3">
                <label class="w-100" for="status">Trạng thái</label>
                <div class="form-control d-flex gap-2 align-items-center" style="gap: 5px;">
                    <input type="checkbox" id="status" name="Status" checked>
                    <label class="form-check-label flex-grow-1" for="status">Hiện</label>
                </div>
            </div>
            <div class="form-check col-md-3 px-3">
                <label class="w-100" for="high_flg">Nổi bật</label>
                <div class="form-control d-flex gap-2 align-items-center" style="gap: 5px;">
                    <input type="checkbox" id="high_flg" name="High_flg">
                    <label class="form-check-label flex-grow-1" for="high_flg">Có</label>
                </div>
            </div>
            <div class="form-group col-md-6 px-3">
                <label class="w-100" for="summary" style="padding-top: 7px;">Tóm tắt</label>
                <div class="md-form">
                    <textarea id="summary" name="Summary" class="md-textarea form-control"></textarea>
                </div>
                <div class=" col-lg-12 messages text-danger"></div>
            </div>
            <div class="form-group col-md-6 px-3">
                <label class="w-100" for="Summary_en" style="padding-top: 7px;">Tóm tắt bằng tiếng anh</label>
                <div class="md-form">
                    <textarea id="summary_en" name="summary_en" class="md-textarea form-control"></textarea>
                </div>
                <div class=" col-lg-12 messages text-danger"></div>
            </div>
            <div class="form-group col-md-12 px-3">
                <label class="w-100" for="content" style="padding-top: 7px;">Nội dung</label>
                <div class="md-form">
                    <textarea id="content" name="Content" class="md-textarea form-control"></textarea>
                </div>
                <div class=" col-lg-12 messages text-danger"></div>
            </div>
            <div class="form-group col-md-12 px-3">
                <label class="w-100" for="content_en" style="padding-top: 7px;">Nội dung bằng tiếng anh</label>
                <div class="md-form">
                    <textarea id="content_en" name="Content_en" class="md-textarea form-control"></textarea>
                </div>
                <div class=" col-lg-12 messages text-danger"></div>
            </div>
        </div>
    </div>
</form>
<script>
    CKEDITOR.editorConfig = function(config) {
        config.enterMode = CKEDITOR.ENTER_BR;
        config.autoParagraph = false;
        config.fillEmptyBlocks = false;
    };
    // CKEditor
    CKEDITOR.replace('summary', { height: '150px' });
    CKEDITOR.replace('summary_en', { height: '150px' });
    CKEDITOR.replace('content', { height: '300px' });
    CKEDITOR.replace('content_en', { height: '300px' });
    CKEDITOR.replace('result', { height: '300px' });
    // let summaryEditor = CKEDITOR.instances.summary;
    // let summaryEnEditor = CKEDITOR.instances.summary_en;
    // let contentEditor = CKEDITOR.instances.content;
    // end CKEditor


    // Validate
    // let constraints = {
    //     title: {
    //         presence: {
    //             allowEmpty: false,
    //             message: "^Không được để trống!"
    //         }
    //     },
    //     tittle_en: {
    //         presence: {
    //             allowEmpty: false,
    //             message: "^Không được để trống!"
    //         }
    //     },
    //     slug: {
    //         presence: {
    //             allowEmpty: false,
    //             message: "^Không được để trống!"
    //         }
    //     },
    //     code: {
    //         presence: {
    //             allowEmpty: false,
    //             message: "^Không được để trống!"
    //         }
    //     },
    //     answer: {
    //         presence: {
    //             allowEmpty: false,
    //             message: "^Không được để trống!"
    //         }
    //     }
    // };

    // validateData('#main', constraints);

</script>
@stop