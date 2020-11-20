@extends('admin.master')

@section('title')
Sửa loại tin tức
@endsection

@section('main')

<form enctype="multipart/form-data" action="{{route("adminBlogCatePutEdit",$data->id)}}" method="post">
    <div class="card">
        <div class="card-header">
            <button class="btn btn-success" type="submit" name="submit"><i class="fas fa-save"></i> Lưu thay đổi</button>
            <a href="{{ route('adminBlogCate') }}" class="btn btn-danger"><i class="fas fa-window-close"></i> Hủy bỏ</a>
        </div>
        <div class="card-body">
            <div class="card-body d-flex flex-wrap">
                {{ csrf_field() }}
                @include("admin.page.blog-category.inc.form")
            </div>
        </div>
    </div>
</form>
<script>
    // CKEditor
    CKEDITOR.replace('summary', { height: '150px' });
    CKEDITOR.replace('summary_en', { height: '150px' });
    CKEDITOR.replace('content', { height: '300px' });
    CKEDITOR.replace('content_en', { height: '300px' });


    // Validate
    let constraints = {
        title: {
            presence: {
                allowEmpty: false,
                message: "^Không được để trống!"
            }
        },
        tittle_en: {
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
        code: {
            presence: {
                allowEmpty: false,
                message: "^Không được để trống!"
            }
        },
        answer: {
            presence: {
                allowEmpty: false,
                message: "^Không được để trống!"
            }
        }
    };

    validateData('#main', constraints);
    // End Validate

    function pushQuestionDataToSelectAnswer() {
        let html = `<option value="" aria-readonly="true">Ấn để chọn</option>`;

        question.map(i => html += `<option value="${i.content}">${i.content}</option>`)

        $('#answer').html(html);
    }

</script>
@endsection
