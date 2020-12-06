<div style="padding-top: 80px" class="container">
    <div class="row">
        <section class="hero is-primary is-fullheight mb-5 pt-5">
            <h2>{{ $data->title }}</h2>
            <p>Thời gian làm bài: {{ $data->time }} phút</p>
            <p id="timeLeft">Thời gian còn lại: 00 phút</p>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div id="questionList" class="column is-half">
                @foreach($data->content as $question_number => $test)
                @if(substr($data->id_theforms_cat,0,5) == substr($test->code,0,5))
                <div class="p-5">
                    {{-- <h4 class="subtitle has-text-centered is-uppercase is-7 navigation">{{ $test->title }}</h4>
                    <h4 class="subtitle is-5">{!! $test->content !!}</h4> --}}
                    <h4 class="pb-4 text-left">{{ $test->title }}</h4>
                    <h5 class="text-left ml-3 mb-4">Question {{ $question_number + 1 }}</h5>
                    <div class="question-content">{!! $test->content !!}</div>
                    <div class="form-check p-0 gap-2 d-flex flex-column mt-5" style="gap: 5px;">
                        @if($test->type == 0)
                        @foreach(json_decode($test->question) as $index => $ques)
                        <div class="form-control">
                            <div class="form-group text-left d-flex align-items-center" style="gap: 10px;">
                                <input type="radio" id="answer-{{ $test->id.$index }}" data-id="{{ $test->id }}" data-answer="{{ $test->answer }}" name="answer-{{ $test->id }}" value="{{ $ques }}" style="cursor: pointer;">
                                <label class="flex-grow-1 form-check-label flex-grow-1 mr-3" for="answer-{{ $test->id.$index }}" style="cursor: pointer;">{{$ques}}</label>
                            </div>
                        </div>
                        @endforeach
                        @elseif ($test->type == 1)
                        <div class="form-group text-left d-flex align-items-center" style="gap: 10px;">
                            <div class="input-container">
                                {{-- <i class="fas fa-arrow-right icon"></i> --}}
                                <textarea id="answer-{{ $test->id.$index }}" data-id="{{ $test->id }}" data-answer="{{ $test->answer }}" name="answer-{{ $test->id }}" rows="5" class="input-field p-3" type="text" placeholder="Nhập câu trả lời"></textarea>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                @endif
                @endforeach
                <div>
                    <button id="submit" style="margin-bottom: 1rem" class="btn btn-success text-light font-weight-bold"><i class="fa fa-check-circle"></i> Nộp Bài</button>
                </div>
            </div>
        </section>
    </div>
</div>
<script>
    let btnSubmit = document.getElementById('submit');

    let totalQuestion = document.getElementById('questionList').childElementCount - 1;
    let checkedQuestion = 0;
    let rightAnswer = 0;

    let totalTime = 60 * {!! $data->time !!};
    let countTime = totalTime;

    let timeCountDown = setInterval(() => {
        countTime--;
        document.querySelector('#timeLeft').textContent = `Thời gian còn lại ${Math.ceil(countTime / 60) >= 0 ? Math.ceil(countTime / 60) : 0} phút`;
        document.querySelector('.progress .progress-bar').style.width = `${countTime / totalTime * 100}%`;
    }, 1000)

    btnSubmit.addEventListener('click', function () {
        this.disabled = true;
        this.textContent = "Đã nộp bài!";


        checkedQuestion = 0;
        // Ckeck trắc nghiệm
        document.querySelectorAll('input[name^=answer-]').forEach(function (item) {
            item.disabled = true;
            if (item.attributes['data-answer'].value == item.value) item.parentElement.parentElement.classList.add('alert-success');
        });

        document.querySelectorAll('input[name^=answer-]:checked').forEach(function (item) {
            checkedQuestion++;
            if (item.attributes['data-answer'].value != item.value) item.parentElement.parentElement.classList.add('alert-danger');
            else rightAnswer++;
        });


        // Check Tự luận
        document.querySelectorAll('textarea[name^=answer-]').forEach(function (item) {
            item.disabled = true;
            if (item.attributes['data-answer'].value.toLowerCase() == item.value.toLowerCase()) item.classList.add('border-success', 'text-info');
        });

        document.querySelectorAll('textarea[name^=answer-]').forEach(function (item) {
            if (item.value) checkedQuestion++;

            if (item.attributes['data-answer'].value.toLowerCase() != item.value.toLowerCase()) {
                item.classList.add('border-danger', 'text-danger');

                let rightAnswerElement = `<div class="form-group text-left d-flex align-items-center" style="gap: 10px;">
                        <div class="input-container">
                            <textarea disabled rows="5" class="text-success border-success input-field p-3" type="text">${item.attributes['data-answer'].value}</textarea>
                        </div>
                    </div>`;

                $(item.parentElement.parentElement.parentElement).append($(rightAnswerElement));

            }
            else rightAnswer++;
        });

        clearInterval(timeCountDown);

        Swal.fire({
            title: 'Kết quả làm bài!',
            icon: 'info',
            html: `Thời gian làm bài: <b class="text-info">${Math.ceil((totalTime / 60) - (countTime / 60))} phút</b> ${(Math.ceil((totalTime / 60) - (countTime / 60)) - Math.ceil(countTime / 60)) > Math.ceil(countTime / 60) ? `(<b class="text-danger">Quá giờ nộp</b>)` : ''}<br/>Số câu hỏi đã làm: <b class="text-info">${checkedQuestion}/${totalQuestion}</b><br/>Số câu đúng: <b class="text-info">${rightAnswer}/${totalQuestion}</b>`,
            showCloseButton: true,
            focusConfirm: false,
            confirmButtonText: '<i class="fa fa-check-circle"></i> Okay!'
        })
    })
</script>
