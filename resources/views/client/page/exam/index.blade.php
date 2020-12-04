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
                @foreach ($data['form'] as $item)
                @foreach(json_decode($item->content) as $i)
                @foreach($data['test'] as $test)
                @if(substr($item->id_theforms_cat,0,5) == substr($test->code,0,5))
                @if($i == substr($test->code,5))
                <div class="has-text-centered p-5">
                    <h4 class="subtitle has-text-centered is-uppercase is-7 navigation">{{ $test->title }}</h4>
                    <h6 class="subtitle has-text-centered is-5">{!! $test->content !!}</h6>
                    <form action="#" method="GET">
                        @foreach(json_decode($test->question) as $ques)
                        <div class="form-group">
                            <p class="option form-inline">
                                <input type="radio" data-id="{{ $test->id }}" data-answer="{{ $test->answer }}" name="answer" value="{{ $ques }}"> &nbsp;
                                {{$ques}}
                            </p>
                        </div>
                        @endforeach
                    </form>
                    <hr>
                </div>
                @endif
                @endif
                @endforeach
                @endforeach
                @endforeach
            </div>
            <div>
                <a id="submit" style="margin-bottom: 1rem" href="javascript:void(0)" class="btn btn-success">Nộp bài</a>
            </div>
        </section>
    </div>
</div>
<script>
    let btnSubmit = document.getElementById('submit');

    let totalQuestion = document.getElementById('questionList').childElementCount;
    let checkedQuestion = 0;
    let rightAnswer = 0;


    let totalTime = 60 * {!! $data->time !!};
    let countTime = totalTime;

    let timeCountDown = setInterval(() => {
        countTime--;
        document.querySelector('#timeLeft').textContent = `Thời gian còn lại ${Math.ceil(countTime / 60) >= 0 ? Math.ceil(countTime / 60) : 0} phút`;
        document.querySelector('.progress .progress-bar').style.width = `${countTime / totalTime * 100}%`;
    } , 1000)

    btnSubmit.addEventListener('click', function () {
        this.disabled = true;
        this.textContent = "Đã nộp bài!";


        checkedQuestion = 0;
        document.querySelectorAll('input[name=answer]').forEach(function(item) {
            item.readOnly = true;
            if (item.attributes['data-answer'].value == item.value) item.parentElement.classList.add('bg-success');
        });

        document.querySelectorAll('input[name=answer]:checked').forEach(function(item) {
            checkedQuestion++;
            if (item.attributes['data-answer'].value != item.value) item.parentElement.classList.add('bg-danger');
            else rightAnswer++;
        });


        // Check Tự luận
        document.querySelectorAll('textarea[name^=answer-]').forEach(function(item) {
            item.disabled = true;
            if (item.attributes['data-answer'].value.toLowerCase() == item.value.toLowerCase()) item.classList.add('border-success', 'text-info');
        });

        document.querySelectorAll('textarea[name^=answer-]').forEach(function(item) {
            if(item.value) checkedQuestion++;

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
