@extends('admin.master')
@section('title','Sửa loại câu hỏi')
@section('main')
<form enctype="multipart/form-data" id="main" action="{{ route('adminTestCategoryPostEdit', $data['id']) }}" method="POST" novalidate>
    @csrf

    <div class="card">
        <div class="card-header">
            <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Lưu</button>
            <a href="{{ route('adminTestCategory') }}" class="btn btn-danger"><i class="fas fa-window-close"></i> Hủy bỏ</a>
        </div>
        <div class="card-body d-flex flex-wrap">
            <div class="form-group col-md-6 px-3">
                <label class="w-100" for="title">Title</label>
                <div class="w-100">
                    <input type="text" id="title" name="title" class="form-control" placeholder="Tiêu đề" value="{{ $data['title'] }}">
                </div>
                <div class="col-lg-12 messages text-danger"></div>
            </div>
            <div class="form-group col-md-6 px-3">
                <label class="w-100" for="title_en">Title English</label>
                <div class="w-100">
                    <input type="text" id="title_en" name="title_en" class="form-control" placeholder="Tiêu đề bằng tiếng anh" value="{{ $data['title_en'] }}">
                </div>
                <div class="col-lg-12 messages text-danger"></div>
            </div>
            <div class="form-group col-md-6 px-3">
                <label class="w-100" for="slug">Slug</label>
                <div class="w-100">
                    <input type="text" id="slug" name="slug" class="form-control" placeholder="Slug" value="{{ $data['slug'] }}">
                </div>
                <div class="col-lg-12 messages text-danger"></div>
            </div>
            <div class="form-check col-md-6 px-3">
                <label class="w-100" for="status">Trạng thái</label>
                <div class="form-control d-flex gap-2 align-items-center" style="gap: 5px;">
                    <input type="checkbox" id="status" name="status" {{ $data['status'] == "on" ? "checked" : ""}}>
                    <label class="form-check-label flex-grow-1" for="status">Hiện</label>
                </div>
            </div>
            <div class="form-group col-md-6 px-3">
                <label class="w-100" for="meta_title">Meta Title</label>
                <div class="w-100">
                    <input type="text" id="meta_title" name="meta_title" class="form-control" placeholder="Meta Title" value="{{ $data['meta_title'] }}">
                </div>
                <div class=" col-lg-12 messages text-danger"></div>
            </div>
            <div class="form-group col-md-6 px-3">
                <label class="w-100" for="meta_description">Meta Description</label>
                <div class="w-100">
                    <input type="text" id="meta_description" name="meta_description" class="form-control" placeholder="Meta Description" value="{{ $data['meta_description'] }}">
                </div>
                <div class=" col-lg-12 messages text-danger"></div>
            </div>
            <div class="form-group col-md-6 px-3">
                <label class="w-100" for="summary" style="padding-top: 7px;">Tóm tắt</label>
                <div class="md-form">
                    <textarea id="summary" name="summary" class="md-textarea form-control">{{ $data['summary'] }}</textarea>
                </div>
                <div class=" col-lg-12 messages text-danger"></div>
            </div>
            <div class="form-group col-md-6 px-3">
                <label class="w-100" for="summary_en" style="padding-top: 7px;">Tóm tắt bằng tiếng anh</label>
                <div class="md-form">
                    <textarea id="summary_en" name="summary_en" class="md-textarea form-control">{{ $data['summary_en'] }}</textarea>
                </div>
                <div class=" col-lg-12 messages text-danger"></div>
            </div>
            <div class="form-group col-md-12 px-3">
                <label class="w-100" for="content" style="padding-top: 7px;">Nội dung</label>
                <div class="md-form">
                    <textarea id="content" name="content" class="md-textarea form-control">{{ $data['content'] }}</textarea>
                </div>
                <div class=" col-lg-12 messages text-danger"></div>
            </div>
        </div>
    </div>
</form>
<script>
    // CKEditor
    CKEDITOR.replace('summary', { height: '150px' });
    CKEDITOR.replace('summary_en', { height: '150px' });
    CKEDITOR.replace('content', { height: '300px' });
    let summaryEditor = CKEDITOR.instances.summary;
    let summaryEnEditor = CKEDITOR.instances.summary_en;
    let contentEditor = CKEDITOR.instances.content;
    // end CKEditor


    // Validate
    let constraints = {
        title: {
            presence: {
                allowEmpty: false,
                message: "^Không được để trống!"
            }
        },
        title_en: {
            presence: {
                allowEmpty: false,
                message: "^Không được để trống!"
            }
        },
        slug: {
            presence: {
                allowEmpty: false,
                message: "^Không được để trống!"
            }
        },
    };

    validateData('#main', constraints);
    // End Validate

</script>
@stop
