@extends('admin.master')

@section('title')
Trang tạo bài kiểm tra
@endsection

@section('main')
<form enctype="multipart/form-data" action="{{route("adminMakeTestPostAdd")}}" method="post">
    <div class="card">
        <div class="card-header">
            <button class="btn btn-success" type="submit" name="submit"><i
                    class="fas fa-save"></i> Lưu đề thi</button>
            <a href="{{ route('adminMakeTest') }}" class="btn btn-danger"><i class="fas fa-window-close"></i> Hủy bỏ</a>
        </div>
            <div class="card-body d-flex flex-wrap">
                {{ csrf_field() }}
                @include("admin.page.make-test.inc._form")
            </div>
    </div>
 </form>

 <script>
    // CKEditor
    CKEDITOR.replace('summary', { height: '150px' });
    CKEDITOR.replace('summary_en', { height: '150px' });
    CKEDITOR.replace('content', { height: '300px' });
    CKEDITOR.replace('content_en', { height: '300px' });

    function pushQuestionDataToSelectAnswer() {
        let html = `<option value="" aria-readonly="true">Ấn để chọn</option>`;

        question.map(i => html += `<option value="${i.content}">${i.content}</option>`)

        $('#answer').html(html);
    }

</script>
@endsection