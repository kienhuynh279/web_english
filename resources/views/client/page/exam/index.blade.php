@php
$question_number = 0;
@endphp
<div style="padding-top: 80px" class="container">
    <div class="row">
        <section class="hero is-primary is-fullheight mb-5 pt-5">
            <h2>{{ $data->title }}</h2>
            <p>Thời gian làm bài: {{ $data->time }} phút</p>
            <p id="timeLeft">Thời gian còn lại: 00 phút</p>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div id="questionList" class="column is-half">
                @foreach ($data->content as $part)
                <h4 class="mx-3 p-4 pb-2 text-left font-weight-bold"><i>{{ $part['title'] }}</i></h4>
                @foreach($part['questionList'] as $question)
                @php
                $question_number++;
                @endphp
                <div class="">
                    <div class="question-content">{!! $question->content !!}</div>
                    <h5 class="text-left mx-3 font-weight-bold">Question {{ $question_number }}</h5>
                    <div class="form-check p-0 gap-2 d-flex flex-column mt-3" style="gap: 5px;">
                        @if($question->type == 0)
                        @foreach(json_decode($question->question) as $index => $ques)
                        <div class="form-control">
                            <div class="col-12">
                                <div class="form-group text-left d-flex align-items-center" style="gap: 10px;">
                                    <input type="radio" id="answer-{{ $question->id.$index }}"
                                        data-id="{{ $question->id }}" data-answer="{{ $question->answer }}"
                                        name="answer-{{ $question->id }}" value="{{ $ques }}" style="cursor: pointer;">
                                    <label class="flex-grow-1 form-check-label flex-grow-1 mr-3"
                                        for="answer-{{ $question->id.$index }}"
                                        style="cursor: pointer;">{{$ques}}</label>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @elseif ($question->type == 1)
                        <div class="form-group text-left d-flex align-items-center" style="gap: 10px;">
                            <div class="input-container">
                                <textarea id="answer-{{ $question->id.$index }}" data-id="{{ $question->id }}"
                                    data-answer="{{ $question->answer }}" name="answer-{{ $question->id }}" rows="5"
                                    class="input-field p-3" type="text" placeholder="Nhập câu trả lời"></textarea>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
                @endforeach
                <div>
                    <button id="submit" style="margin-bottom: 1rem"
                        class="btn btn-success text-light font-weight-bold"><i class="fa fa-check-circle"></i> Nộp
                        Bài</button>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="container">
    <h1 class="text-center mb-15">UI Test New</h1>
    <div class="row mb-20">
        <div class="col-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fugit numquam doloribus similique voluptatibus eius iusto dolores quas! Explicabo odio consectetur reprehenderit aliquid ea quia recusandae voluptatem dolor quasi aut?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa rem iure ex omnis magni distinctio, possimus dolores suscipit assumenda quas voluptas, provident et consectetur nemo, maiores quo nobis fugiat hic?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore atque sunt quos optio nemo placeat suscipit veritatis dolor dolorem quasi perferendis hic a necessitatibus eligendi aliquam repellat, voluptates delectus? Perspiciatis!
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi quaerat dicta magnam amet provident velit atque harum porro et ex pariatur, reiciendis nam odio non sit unde fuga voluptatibus quo?
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate suscipit quidem assumenda dolor maxime, perferendis ad modi saepe ab dolores repellat fugit impedit cumque nostrum, dolorum nihil. Error, nulla deserunt.
            </p>
        </div>
        <div class="col-6">
            <div class="question-content">Câu hỏi</div>
            <h5 class="text-left mx-3 font-weight-bold">Question 1</h5>
            <div class="form-check p-0 gap-2 d-flex flex-column mt-3" style="gap: 5px;">
                <div class="form-control">
                    <div class="col-12">
                        <div class="form-group text-left d-flex align-items-center" style="gap: 10px;">
                            <input type="radio" id="answer-{{ $question->id.$index }}"
                                data-id="{{ $question->id }}" data-answer="{{ $question->answer }}"
                                name="answer-{{ $question->id }}" value="{{ $ques }}" style="cursor: pointer;">
                            <label class="flex-grow-1 form-check-label flex-grow-1 mr-3"
                                for="answer-{{ $question->id.$index }}"
                                style="cursor: pointer;">Đáp án 4</label>
                        </div>
                    </div>
                </div>
                <div class="form-control">
                    <div class="col-12">
                        <div class="form-group text-left d-flex align-items-center" style="gap: 10px;">
                            <input type="radio" id="answer-{{ $question->id.$index }}"
                                data-id="{{ $question->id }}" data-answer="{{ $question->answer }}"
                                name="answer-{{ $question->id }}" value="{{ $ques }}" style="cursor: pointer;">
                            <label class="flex-grow-1 form-check-label flex-grow-1 mr-3"
                                for="answer-{{ $question->id.$index }}"
                                style="cursor: pointer;">Đáp án 3</label>
                        </div>
                    </div>
                </div>
                <div class="form-control">
                    <div class="col-12">
                        <div class="form-group text-left d-flex align-items-center" style="gap: 10px;">
                            <input type="radio" id="answer-{{ $question->id.$index }}"
                                data-id="{{ $question->id }}" data-answer="{{ $question->answer }}"
                                name="answer-{{ $question->id }}" value="{{ $ques }}" style="cursor: pointer;">
                            <label class="flex-grow-1 form-check-label flex-grow-1 mr-3"
                                for="answer-{{ $question->id.$index }}"
                                style="cursor: pointer;">Đáp án 2</label>
                        </div>
                    </div>
                </div>
                <div class="form-control">
                    <div class="col-12">
                        <div class="form-group text-left d-flex align-items-center" style="gap: 10px;">
                            <input type="radio" id="answer-{{ $question->id.$index }}"
                                data-id="{{ $question->id }}" data-answer="{{ $question->answer }}"
                                name="answer-{{ $question->id }}" value="{{ $ques }}" style="cursor: pointer;">
                            <label class="flex-grow-1 form-check-label flex-grow-1 mr-3"
                                for="answer-{{ $question->id.$index }}"
                                style="cursor: pointer;">Đáp án 1</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="question-content">Câu hỏi</div>
            <h5 class="text-left mx-3 font-weight-bold">Question 1</h5>
            <div class="form-check p-0 gap-2 d-flex flex-column mt-3" style="gap: 5px;">
                <div class="form-control">
                    <div class="col-12">
                        <div class="form-group text-left d-flex align-items-center" style="gap: 10px;">
                            <input type="radio" id="answer-{{ $question->id.$index }}"
                                data-id="{{ $question->id }}" data-answer="{{ $question->answer }}"
                                name="answer-{{ $question->id }}" value="{{ $ques }}" style="cursor: pointer;">
                            <label class="flex-grow-1 form-check-label flex-grow-1 mr-3"
                                for="answer-{{ $question->id.$index }}"
                                style="cursor: pointer;">Đáp án 4</label>
                        </div>
                    </div>
                </div>
                <div class="form-control">
                    <div class="col-12">
                        <div class="form-group text-left d-flex align-items-center" style="gap: 10px;">
                            <input type="radio" id="answer-{{ $question->id.$index }}"
                                data-id="{{ $question->id }}" data-answer="{{ $question->answer }}"
                                name="answer-{{ $question->id }}" value="{{ $ques }}" style="cursor: pointer;">
                            <label class="flex-grow-1 form-check-label flex-grow-1 mr-3"
                                for="answer-{{ $question->id.$index }}"
                                style="cursor: pointer;">Đáp án 3</label>
                        </div>
                    </div>
                </div>
                <div class="form-control">
                    <div class="col-12">
                        <div class="form-group text-left d-flex align-items-center" style="gap: 10px;">
                            <input type="radio" id="answer-{{ $question->id.$index }}"
                                data-id="{{ $question->id }}" data-answer="{{ $question->answer }}"
                                name="answer-{{ $question->id }}" value="{{ $ques }}" style="cursor: pointer;">
                            <label class="flex-grow-1 form-check-label flex-grow-1 mr-3"
                                for="answer-{{ $question->id.$index }}"
                                style="cursor: pointer;">Đáp án 2</label>
                        </div>
                    </div>
                </div>
                <div class="form-control">
                    <div class="col-12">
                        <div class="form-group text-left d-flex align-items-center" style="gap: 10px;">
                            <input type="radio" id="answer-{{ $question->id.$index }}"
                                data-id="{{ $question->id }}" data-answer="{{ $question->answer }}"
                                name="answer-{{ $question->id }}" value="{{ $ques }}" style="cursor: pointer;">
                            <label class="flex-grow-1 form-check-label flex-grow-1 mr-3"
                                for="answer-{{ $question->id.$index }}"
                                style="cursor: pointer;">Đáp án 1</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="col-12">
        <h4 class="text-center question-content">
            The warming ot the Earth is caused by exhaust gas from automobile engines, factories

            and power (8) ________. Carbon dioxide goes up into the atmosphere, and it form a kind of

            screen that keeps or allows the sunshine in but stop the Earth heat (9) _______ getting out. It

            works like a greenhouse, that’s why we call (10) ________ the Green House effect.

            Because ot this effect, the Earth is getting warmer alt the time. This (11) ________ in

            temperature will cause big changes to the world’s climate. The sea level will increase as the

            ice (12) _______ the poles will melt.</h4>

        <div class="tab">
            <button class="tablinks" onclick="openTest(event, 'test_1')">Test 1</button>
            <button class="tablinks" onclick="openTest(event, 'test_2')">Test 2</button>
            <button class="tablinks" onclick="openTest(event, 'test_3')">Test 3</button>
        </div>

        <div id="test_1" class="tabcontent">
            <h4 class="mx-3 text-left font-weight-bold"><i>Câu hỏi</i></h4>
            <input type="radio" style="cursor: pointer;">
            <label class="flex-grow-1 form-check-label flex-grow-1 mr-3" style="cursor: pointer;">Test 1</label>
        </div>

        <div id="test_2" class="tabcontent">
            <h4 class="mx-3 text-left font-weight-bold"><i>Câu hỏi</i></h4>
            <input type="radio" style="cursor: pointer;">
            <label class="flex-grow-1 form-check-label flex-grow-1 mr-3" style="cursor: pointer;">Test 2</label>
        </div>

        <div id="test_3" class="tabcontent">
            <h4 class="mx-3 text-left font-weight-bold"><i>Câu hỏi</i></h4>
            <input type="radio" style="cursor: pointer;">
            <label class="flex-grow-1 form-check-label flex-grow-1 mr-3" style="cursor: pointer;">Test 3</label>
        </div>
    </div>
</div>
<script>
    let btnSubmit = document.getElementById('submit');
    let btnTest = document.getElementById('test');

    let totalQuestion = document.querySelectorAll('#questionList > div > h5').length;
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
    

    function openTest(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>