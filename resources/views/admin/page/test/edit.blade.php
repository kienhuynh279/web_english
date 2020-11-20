@extends('admin.master')
@section('title','Sửa câu hỏi')
@section('main')
<form enctype="multipart/form-data" id="main" action="{{ route('adminTestPostEdit', $data['id']) }}" method="POST" novalidate>
    @csrf

    <div class="card">
        <div class="card-header">
            <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Lưu</button>
            <a href="{{ route('adminTest') }}" class="btn btn-danger"><i class="fas fa-window-close"></i> Hủy bỏ</a>
        </div>
        <div class="card-body d-flex flex-wrap">
            <div class="form-group col-md-6 px-3">
                <label class="w-100" for="code">Loại câu hỏi</label>
                <div class="w-100">
                    <select class="form-control" name="code" id="code">
                        <option value="" aria-readonly="true">Ấn để chọn</option>
                        @isset($TestCategoryData)
                        @foreach ($TestCategoryData as $item)
                        <optgroup label="{{ $item->title }}">
                            @foreach($item->child as $child_item)
                            <option value="1{{ ($item->id > 9 ? $item->id : "0".$item->id).($child_item->id > 9 ? $child_item->id : "0".$child_item->id).$data->id }}" {{ ("1".($item->id > 9 ? $item->id : "0".$item->id).($child_item->id > 9 ? $child_item->id : "0".$child_item->id).$data->id == $data['code']) ? "selected" : "" }}>{{ $child_item->title }}</option>
                            @endforeach
                        </optgroup>
                        @endforeach
                        @endisset
                    </select>
                </div>
                <div class="col-lg-12 messages text-danger"></div>
            </div>
            <div class="form-group col-md-6 px-3">
                <label class="w-100" for="rank">Độ Khó</label>
                <div class="w-100">
                    <input type="text" id="rank" name="rank" class="form-control" placeholder="Độ khó" value="{{ $data['rank'] }}">
                </div>
                <div class="col-lg-12 messages text-danger"></div>
            </div>
            <div class="form-group col-md-6 px-3">
                <label class="w-100" for="title">Title</label>
                <div class="w-100">
                    <input type="text" id="title" name="title" class="form-control" placeholder="Tiêu đề" value="{{ $data['title'] }}">
                </div>
                <div class="col-lg-12 messages text-danger"></div>
            </div>
            <div class="form-group col-md-6 px-3">
                <label class="w-100" for="tittle_en">Title English</label>
                <div class="w-100">
                    <input type="text" id="tittle_en" name="tittle_en" class="form-control" placeholder="Tiêu đề bằng tiếng anh" value="{{ $data['tittle_en'] }}">
                </div>
                <div class="col-lg-12 messages text-danger"></div>
            </div>
            <div class="form-group col-md-12 px-3">
                <label class="w-100" for="status">Đáp án</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">A</div>
                    </div>
                    <input data-type="question-A" type="text" class="form-control">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">B</div>
                    </div>
                    <input data-type="question-B" type="text" class="form-control">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">C</div>
                    </div>
                    <input data-type="question-C" type="text" class="form-control">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">D</div>
                    </div>
                    <input data-type="question-D" type="text" class="form-control">
                </div>
                <div class="input-group w-100">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Đáp án đúng</div>
                    </div>
                    <select class="form-control" name="answer" id="answer">
                        <option value="" aria-readonly="true">Ấn để chọn (Bắt buộc)</option>
                    </select>
                </div>
                <input type="hidden" id="question" name="question" value="{{ $data['question'] }}">
            </div>
            <div class="form-group col-md-6 px-3">
                <label class="w-100" for="slug">Slug</label>
                <div class="w-100">
                    <input type="text" id="slug" name="slug" class="form-control" placeholder="Slug" value="{{ $data['slug'] }}">
                </div>
                <div class="col-lg-12 messages text-danger"></div>
            </div>
            <div class="form-check col-md-3 px-3">
                <label class="w-100" for="status">Trạng thái</label>
                <div class="form-control d-flex gap-2 align-items-center" style="gap: 5px;">
                    <input type="checkbox" id="status" name="status" {{ $data['status'] == 1 ? "checked" : ""}}>
                    <label class="form-check-label flex-grow-1" for="status">Hiện</label>
                </div>
            </div>
            <div class="form-check col-md-3 px-3">
                <label class="w-100" for="high_flg">Nổi bật</label>
                <div class="form-control d-flex gap-2 align-items-center" style="gap: 5px;">
                    <input type="checkbox" id="high_flg" name="high_flg" {{ $data['high_flg'] == 1 ? "checked" : ""}}>
                    <label class="form-check-label flex-grow-1" for="high_flg">Có</label>
                </div>
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
            <div class="form-group col-md-12 px-3">
                <label class="w-100" for="content_en" style="padding-top: 7px;">Nội dung bằng tiếng anh</label>
                <div class="md-form">
                    <textarea id="content_en" name="content_en" class="md-textarea form-control">{{ $data['content_en'] }}</textarea>
                </div>
                <div class=" col-lg-12 messages text-danger"></div>
            </div>
            <div class="form-group col-md-12 px-3">
                <label class="w-100" for="result" style="padding-top: 7px;">Kết quả</label>
                <div class="md-form">
                    <textarea id="result" name="result" class="md-textarea form-control">{{ $data['result'] }}</textarea>
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
    CKEDITOR.replace('content_en', { height: '300px' });
    CKEDITOR.replace('result', { height: '300px' });
    // let summaryEditor = CKEDITOR.instances.summary;
    // let summaryEnEditor = CKEDITOR.instances.summary_en;
    // let contentEditor = CKEDITOR.instances.content;
    // end CKEditor


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

    // Q&A
    let question = [
        { id: "question-A", content: "" },
        { id: "question-B", content: "" },
        { id: "question-C", content: "" },
        { id: "question-D", content: "" },
    ]

    let questionData = JSON.parse(`{!! $data['question'] !!}`);

    questionData.forEach((item, index) => {
        question[index].content = item;
    });

    pushQuestionDataToSelectAnswer();

    // get all question input
    $('input[data-type^="question-"]').each(function (index, item) {
        item.value = question[index].content;

        item.addEventListener("input", function() {
            let id = this.attributes['data-type'].value;

            question.forEach(i => { if (i.id == id) i.content = this.value; });

            let questionArr = [];
            question.map(i => questionArr.push(i.content));

            $('#question').val(JSON.stringify(questionArr));

            pushQuestionDataToSelectAnswer();
        });
    });

    loadQuestionDataToSelectAnswer();

    function loadQuestionDataToSelectAnswer() {
        let html = `<option value="" aria-readonly="true">Ấn để chọn</option>`;

        question.map(i => html += `<option value="${i.content}" ${('{!! $data['answer'] !!}' == i.content) ? "selected" : ""}>${i.content}</option>`)

        $('#answer').html(html);
    }

    function pushQuestionDataToSelectAnswer() {
        let html = `<option value="" aria-readonly="true">Ấn để chọn</option>`;

        question.map(i => html += `<option value="${i.content}">${i.content}</option>`)

        $('#answer').html(html);
    }
    // End Q&A

</script>
@stop
