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
                            <div class="col-6">
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
    <div class="row">
        <div class="col-3">
            <button id="test" class="btn btn-success text-light font-weight-bold">Câu hỏi</button>
            <div id="test_form" style="display: none; ">
                <input type="radio" style="cursor: pointer;">
                <label class="flex-grow-1 form-check-label flex-grow-1 mr-3" style="cursor: pointer;">Test 1</label>
            </div>
        </div>
        <div class="col-3">
            <button id="test" class="btn btn-success text-light font-weight-bold">Câu hỏi</button>
            <div id="test_form" style="display: none; ">
                <input type="radio" style="cursor: pointer;">
                <label class="flex-grow-1 form-check-label flex-grow-1 mr-3" style="cursor: pointer;">Test 1</label>
            </div>
        </div>
        <div class="col-3">
            <button id="test" class="btn btn-success text-light font-weight-bold">Câu hỏi</button>
            <div id="test_form" style="display: none; ">
                <input type="radio" style="cursor: pointer;">
                <label class="flex-grow-1 form-check-label flex-grow-1 mr-3" style="cursor: pointer;">Test 1</label>
            </div>
        </div>
           <div class="col-3">
            <button id="test" class="btn btn-success text-light font-weight-bold">Câu hỏi</button>
            <div id="test_form" style="display: none; ">
                <input type="radio" style="cursor: pointer;">
                <label class="flex-grow-1 form-check-label flex-grow-1 mr-3" style="cursor: pointer;">Test 1</label>
            </div>
        </div>
    </div>
</div>

{{-- 
<div class="container-fluid" style="padding-top: 80px; overflow:hidden;">
    <div class="row">
            <div class="col-lg-6 split" style="overflow: scroll; height: 700px;">
                <div class=" split-item">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit fuga, sapiente, cum mollitia
                        quaerat
                        esse id magni praesentium cumque numquam quidem pariatur sunt fugit tempora aspernatur dicta!
                        Quibusdam, suscipit molestias.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio cum commodi fugit,
                        dignissimos
                        quasi molestias voluptatibus sit optio? Et cum nihil itaque praesentium necessitatibus veniam
                        quae
                        ratione temporibus maxime optio.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aperiam illum distinctio
                        culpa
                        hic laborum voluptates, voluptate explicabo porro nesciunt eligendi? Veniam obcaecati commodi
                        laboriosam nihil, nulla maxime modi architecto.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit fuga, sapiente, cum mollitia
                        quaerat
                        esse id magni praesentium cumque numquam quidem pariatur sunt fugit tempora aspernatur dicta!
                        Quibusdam, suscipit molestias.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio cum commodi fugit,
                        dignissimos
                        quasi molestias voluptatibus sit optio? Et cum nihil itaque praesentium necessitatibus veniam
                        quae
                        ratione temporibus maxime optio.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aperiam illum distinctio
                        culpa
                        hic laborum voluptates, voluptate explicabo porro nesciunt eligendi? Veniam obcaecati commodi
                        laboriosam nihil, nulla maxime modi architecto.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit fuga, sapiente, cum mollitia
                        quaerat
                        esse id magni praesentium cumque numquam quidem pariatur sunt fugit tempora aspernatur dicta!
                        Quibusdam, suscipit molestias.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio cum commodi fugit,
                        dignissimos
                        quasi molestias voluptatibus sit optio? Et cum nihil itaque praesentium necessitatibus veniam
                        quae
                        ratione temporibus maxime optio.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aperiam illum distinctio
                        culpa
                        hic laborum voluptates, voluptate explicabo porro nesciunt eligendi? Veniam obcaecati commodi
                        laboriosam nihil, nulla maxime modi architecto.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit fuga, sapiente, cum mollitia
                        quaerat
                        esse id magni praesentium cumque numquam quidem pariatur sunt fugit tempora aspernatur dicta!
                        Quibusdam, suscipit molestias.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio cum commodi fugit,
                        dignissimos
                        quasi molestias voluptatibus sit optio? Et cum nihil itaque praesentium necessitatibus veniam
                        quae
                        ratione temporibus maxime optio.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aperiam illum distinctio
                        culpa
                        hic laborum voluptates, voluptate explicabo porro nesciunt eligendi? Veniam obcaecati commodi
                        laboriosam nihil, nulla maxime modi architecto.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit fuga, sapiente, cum mollitia
                        quaerat
                        esse id magni praesentium cumque numquam quidem pariatur sunt fugit tempora aspernatur dicta!
                        Quibusdam, suscipit molestias.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio cum commodi fugit,
                        dignissimos
                        quasi molestias voluptatibus sit optio? Et cum nihil itaque praesentium necessitatibus veniam
                        quae
                        ratione temporibus maxime optio.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aperiam illum distinctio
                        culpa
                        hic laborum voluptates, voluptate explicabo porro nesciunt eligendi? Veniam obcaecati commodi
                        laboriosam nihil, nulla maxime modi architecto.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit fuga, sapiente, cum mollitia
                        quaerat
                        esse id magni praesentium cumque numquam quidem pariatur sunt fugit tempora aspernatur dicta!
                        Quibusdam, suscipit molestias.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio cum commodi fugit,
                        dignissimos
                        quasi molestias voluptatibus sit optio? Et cum nihil itaque praesentium necessitatibus veniam
                        quae
                        ratione temporibus maxime optio.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aperiam illum distinctio
                        culpa
                        hic laborum voluptates, voluptate explicabo porro nesciunt eligendi? Veniam obcaecati commodi
                        laboriosam nihil, nulla maxime modi architecto.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit fuga, sapiente, cum mollitia
                        quaerat
                        esse id magni praesentium cumque numquam quidem pariatur sunt fugit tempora aspernatur dicta!
                        Quibusdam, suscipit molestias.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio cum commodi fugit,
                        dignissimos
                        quasi molestias voluptatibus sit optio? Et cum nihil itaque praesentium necessitatibus veniam
                        quae
                        ratione temporibus maxime optio.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aperiam illum distinctio
                        culpa
                        hic laborum voluptates, voluptate explicabo porro nesciunt eligendi? Veniam obcaecati commodi
                        laboriosam nihil, nulla maxime modi architecto.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit fuga, sapiente, cum mollitia
                        quaerat
                        esse id magni praesentium cumque numquam quidem pariatur sunt fugit tempora aspernatur dicta!
                        Quibusdam, suscipit molestias.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio cum commodi fugit,
                        dignissimos
                        quasi molestias voluptatibus sit optio? Et cum nihil itaque praesentium necessitatibus veniam
                        quae
                        ratione temporibus maxime optio.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aperiam illum distinctio
                        culpa
                        hic laborum voluptates, voluptate explicabo porro nesciunt eligendi? Veniam obcaecati commodi
                        laboriosam nihil, nulla maxime modi architecto.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit fuga, sapiente, cum mollitia
                        quaerat
                        esse id magni praesentium cumque numquam quidem pariatur sunt fugit tempora aspernatur dicta!
                        Quibusdam, suscipit molestias.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio cum commodi fugit,
                        dignissimos
                        quasi molestias voluptatibus sit optio? Et cum nihil itaque praesentium necessitatibus veniam
                        quae
                        ratione temporibus maxime optio.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aperiam illum distinctio
                        culpa
                        hic laborum voluptates, voluptate explicabo porro nesciunt eligendi? Veniam obcaecati commodi
                        laboriosam nihil, nulla maxime modi architecto.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit fuga, sapiente, cum mollitia
                        quaerat
                        esse id magni praesentium cumque numquam quidem pariatur sunt fugit tempora aspernatur dicta!
                        Quibusdam, suscipit molestias.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio cum commodi fugit,
                        dignissimos
                        quasi molestias voluptatibus sit optio? Et cum nihil itaque praesentium necessitatibus veniam
                        quae
                        ratione temporibus maxime optio.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aperiam illum distinctio
                        culpa
                        hic laborum voluptates, voluptate explicabo porro nesciunt eligendi? Veniam obcaecati commodi
                        laboriosam nihil, nulla maxime modi architecto.</p>
                        <hr>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="scroll-smooth" style="overflow: scroll; height: 700px">
                    <h1>Mục 2</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eaque culpa dolorem unde earum
                        eveniet
                        deserunt odit hic quaerat reiciendis veritatis illum, possimus quam ipsam tempore nam
                        perspiciatis
                        incidunt rem!</p>
                </div>
            </div>
       
    </div> --}}
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

    btnTest.addEventListener('click', function () {
        this.disabled = true;
        test = document.getElementById('test_form');
        test.style.display = "block";
    })
</script>