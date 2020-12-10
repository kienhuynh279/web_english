@extends('admin.master')
@section('title','Thêm bài kiểm tra')
@section('main')
<form enctype="multipart/form-data" id="main" action="{{ route('adminMakeTestPostAdd') }}" method="POST" novalidate>
    @csrf

    <div class="card">
        <div class="card-header">
            <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Lưu</button>
            <a href="{{ route('adminMakeTest') }}" class="btn btn-danger"><i class="fas fa-window-close"></i> Hủy bỏ</a>
        </div>
        <div class="card-body d-flex flex-wrap">
            <div class="form-group col-md-6 px-3">
                <label class="w-100" for="code">Loại đề thi</label>
                <div class="w-100">
                    <select class="form-control" name="Cate_Id" id="code">
                        <option value="" aria-readonly="true">Ấn để chọn</option>
                        @isset($FormCategoryData)
                        @foreach ($FormCategoryData as $item)
                        <optgroup label="{{ $item->title }}">
                            @foreach($item->child as $child_item)
                            <option value="1{{ ($item->id > 9 ? $item->id : "0".$item->id).($child_item->id > 9 ? $child_item->id : "0".$child_item->id)}}" {{ $child_item->id === ($item->id ?? '') ? 'selected' : '' }}>
                                {{ $child_item->title }}</option>
                            @endforeach
                        </optgroup>
                        @endforeach
                        @endisset
                    </select>
                </div>
                <div class="col-lg-12 messages text-danger"></div>
            </div>
            <div class="form-group col-sm-3">
                <label>Ảnh Đại Diện </label>
                <div class="custom-file">
                    <label class="custom-file-label" for="img">Click vào để chọn ảnh </label>
                    <input required id="img" type="file" name="Avatar" class="custom-file-input" onchange="changeImg(this)">
                </div>
                <img id="avatar" class="thumbnail" width="100%" src="{{ asset('/dist/img/imgdefault.png') }}">
            </div>
            <div class="form-group col-sm-3">
                <label class="w-100" for="time">Thời gian làm bài</label>
                <input id="time" data-type="form" class="form-control" type="number" name="time" min="1" max="999" value="60" required />
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
                    <input type="text" id="tittle_en" name="Tittle_en" class="form-control" placeholder="Tiêu đề bằng tiếng anh">
                </div>
                <div class="col-lg-12 messages text-danger"></div>
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
                <label class="w-100" for="summary_en" style="padding-top: 7px;">Tóm tắt bằng tiếng anh</label>
                <div class="md-form">
                    <textarea id="summary_en" name="Summary_en" class="md-textarea form-control"></textarea>
                </div>
                <div class=" col-lg-12 messages text-danger"></div>
            </div>
            {{-- <div class="form-group col-sm-6 px-3">
                <label class="w-100" for="content" style="padding-top: 7px;">Nhập ID câu hỏi (Cách nhau bởi dấu -)</label>
                <input data-type="form" class="form-control" type="text" name="Content" placeholder="Nhập ID câu hỏi" />
            </div> --}}
            <div class="form-group col-sm-12 px-3">
                <label class="w-100" for="content" style="padding-top: 7px;">Câu hỏi</label>
                <div id="questionList" class="rounded border p-4"
                    style="background-image: repeating-linear-gradient(90deg, rgba(0,0,0, 0.06) 0px, rgba(0,0,0, 0.06) 1px,transparent 1px, transparent 96px),repeating-linear-gradient(0deg, rgba(0,0,0, 0.06) 0px, rgba(0,0,0, 0.06) 1px,transparent 1px, transparent 96px),repeating-linear-gradient(0deg, rgba(29,29,29, 0.09) 0px, rgba(29,29,29, 0.09) 1px,transparent 1px, transparent 12px),repeating-linear-gradient(90deg, rgba(29,29,29, 0.09) 0px, rgba(29,29,29, 0.09) 1px,transparent 1px, transparent 12px),linear-gradient(90deg, rgb(243,243,243),rgb(243,243,243));">
                    <div id="content">
                        {{-- Content data handle by javascript --}}
                    </div>
                    <div class="d-flex justify-content-center w-100">
                        <a href="javascript:void(0)" id="addPart" class="btn btn-dark col-md-5" onclick="test.addPart()">Thêm một phần</a>
                    </div>
                </div>

                <input type="hidden" name="Content" value="[]" />
            </div>
            {{--
            <div class="form-group col-sm-6 px-3">
                <label class="w-100" for="content" style="padding-top: 7px;">Tìm câu hỏi</label>
                <div class="input-group">
                    <input data-type="form" class="form-control" type="text" placeholder="Nhập tiêu đề câu hỏi" />
                    <div class="input-group-append">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                    </div>
                </div>

                <div class="border rounded">
                    <p>asdasd</p>
                </div> --}}
        </div>
    </div>
    </div>
</form>
<script>
    // CKEditor
    CKEDITOR.replace('summary', { height: '150px' });
    CKEDITOR.replace('summary_en', { height: '150px' });
    // end CKEditor


    // Validate
    let constraints = {
        Title: {
            presence: {
                allowEmpty: false,
                message: "^Không được để trống!"
            }
        },
        Slug: {
            presence: {
                allowEmpty: false,
                message: "^Không được để trống!"
            }
        },
        Cate_Id: {
            presence: {
                allowEmpty: false,
                message: "^Không được để trống!"
            }
        },
    };

    validateData('#main', constraints);
    // End Validate

    let test = {
        // dữ liệu các Part
        data: [],

        // Dữ liệu các câu hỏi
        questionData: [],

        // lưu các thay đổi vào thẻ input[name="Content"]
        save() {
            this.data.forEach((item, index) => {
                item.id = index + 1;
            })

            document.querySelector('input[name="Content"]').value = JSON.stringify(this.data);
        },

        // xuất các part ra dựa trên data
        render() {
            $('#content').html('');

            questionIndex = 0;

            this.data.forEach(part => {
                questionList = [];

                part.questionList.forEach(question => {
                    questionIndex++;
                    questionList.push(this.getQuestion(part.id, question, questionIndex));
                });

                $("#content").append($(this.getPart(part, questionList.join(""))));
            });
        },

        // Tạo ra 1 part
        getPart(part, question) {
            return `<div id="part-${part.id}" class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="form-group col-sm-11 px-3">
                        <label class="w-100" for="content" style="padding-top: 7px;">Yêu cầu của phần này</label>
                        <input id="partTitle" class="form-control" oninput="test.onInputTitlePart(this)" type="text" placeholder="Yêu cầu" value="${part.title || ''}" required />
                    </div>
                    <div class="d-flex justify-content-end col-sm-1">
                        <a href="javascript:void(0)" id="deletePart" onclick="test.deletePart(this)" class="btn btn-danger"><i class="fas fa-times"></i></a>
                    </div>
                </div>
                <div class="card-body">${question}</div>

                <div id="addQuestionArea" class="input-group mb-5 d-flex justify-content-center w-100">
                    <div class="input-group-prepend">
                        <div class="input-group-text">ID câu hỏi</div>
                    </div>
                    <div class="input-group-prepend">
                        <input data-input="addQuestionId" type="text" class="form-control" placeholder="ID">
                    </div>
                    <a href="javascript:void(0)" id="addQuestion" class="btn btn-primary" onclick="test.addQuestion(this)"><i class="fas fa-plus"></i></a>
                </div>
            </div>`;
        },

        // Tạo ra 1 question
        getQuestion(partId, questionId, index) {
            // get question data
            let questionData = this.questionData.filter(q => q.id == questionId)[0];
            let answerList = '';

            if(!questionData) return `<div id="question-${questionId}" class="col-sm-12 p-3">
                <h4>[${questionId}] Question ${index} <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="test.deleteQuestion(this)"><i class="fas fa-trash"></i></a> [Không lấy được dữ liệu của câu hỏi này! có thể câu hỏi này đã bị xóa!]</h4>
            </div>`;

            if (!questionData.type) {
                answerList = JSON.parse(questionData.question).map(q => `<div class="col-sm-3">
                    <div class="form-control border ${questionData.answer == q ? 'border-success' : ''}"  style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap">${q}</div>
                </div>`).join("");
            } else {
                answerList = `<div class="col-sm-12">
                    <div class="form-control" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap">[Tự luận] Đáp án: <span class="text-success">${questionData.answer}</span></div>
                </div>`
            }

            return `<div id="question-${questionId}" class="col-sm-12 p-3">
                <h4>[${questionId}] Question ${index} <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="test.deleteQuestion(this)"><i class="fas fa-trash"></i></a></h4>
                <p>${questionData.content || ""}</p>
                <div class="row">${answerList}</div>
            </div>`;
        },

        // thêm part
        addPart() {
            let id = this.data.length + 1;

            let newPart = {
                id: id,
                title: '',
                questionList: []
            }

            this.data.push(newPart);
            this.save();
            this.render()
        },

        // Cập nhật tiêu đề của part mỗi khi thay dổi
        onInputTitlePart(that) {
            let part = that.closest('div[id^=part-]');
            let partId = part.id.split("-")[1];

            this.data.find(part => part.id == partId).title = that.value;
            this.save();
        },

        // Xóa câu hỏi
        deleteQuestion(that) {
            if (!confirm('Bạn có chắc là muốn xóa câu hỏi này không?!')) return;

            let thisQuestion = that.closest('div[id^=question-]');
            let thisPart = thisQuestion.closest('div[id^=part-]');
            let partId = thisPart.id.split("-")[1];
            let questionId = thisQuestion.id.split("-")[1];

            partData = this.data.find(part => part.id == partId);

            let index = partData.questionList.indexOf(parseInt(questionId));

            if (index == -1) return alert("Xóa thất bại");

            partData.questionList.splice(index, 1);

            this.save();
            this.render();
        },

        // Xóa part
        deletePart(that) {
            if (!confirm('Bạn có chắc là muốn xóa phần này không? tất cả các câu hỏi trong phần này cũng sẽ bị xóa!')) return;

            let thisPart = that.closest('div[id^=part-]');
            let partId = thisPart.id.split("-")[1];

            partData = this.data.find(part => part.id == partId);

            let index = this.data.indexOf(partData);
            console.log(index);

            if (index == -1) return alert("Xóa thất bại");

            this.data.splice(index, 1);

            this.save();
            this.render();
        },

        // thêm câu hỏi
        addQuestion(that) {
            let addQuestionArea = that.closest('#addQuestionArea');
            let thisPart = that.closest('[id^="part-"]');
            let partId = thisPart.id.split('-')[1];
            let newQuestionId = $(addQuestionArea).find('input[data-input="addQuestionId"]')[0].value;
            let cate = document.getElementById('code');

            if (!cate.value) return alert('Hãy chọn loại đề thi trước khi thêm câu hỏi!');
            if (!newQuestionId) return alert('Hãy nhập ID câu hỏi!');
            if (!/[0-9]+/g.test(newQuestionId)) return alert('ID câu hỏi phải là số!');

            Promise.all([this.fetchQuestion(newQuestionId)]).then(data => {
                data = data[0];
                if (!data) return alert(`Không tìm thấy câu hỏi này! Hãy kiểm tra lại!`);

                let checkExit = this.questionData.find(question => question.id == data.id);
                if (!checkExit) this.questionData.push(data);

                let allQuestionList = [];
                this.data.forEach(part => allQuestionList = allQuestionList.concat(part.questionList));
                if (allQuestionList.indexOf(parseInt(data.id)) != -1) return alert(`Câu hỏi này đã có trong bài kiểm tra!`)

                if (data.code.toString().slice(0, 5) != cate.value && !confirm(`Câu hỏi này không thuộc loại bài thi này (${cate.selectedOptions[0].textContent.trim()}) bạn có chắc là muốn thêm không?`)) return;

                let partData = this.data.find(part => part.id == partId);
                partData.questionList.push(data.id);

                this.save();
                this.render();
            });

        },

        fetchQuestion(id) {
            return new Promise((resolve, reject) => {
                fetch(`/api/question?id=${id}`).then(res => {
                    res.json().then(data => resolve(data.data[0]));
                }).catch(err => reject(err));
            });
        }


    }


    // part id     - part-1
    // question id - part-1-0

    /**
     * addPart, removePart, onPartTitleChange
     * addQuestion, removeQuestion, getQuestion(id)
     * render
     */

    test.render();
    test.save();
</script>
@stop
