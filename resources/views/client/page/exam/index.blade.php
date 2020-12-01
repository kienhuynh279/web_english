<div style="padding-top: 80px" class="container">
    <div class="row">
        <section class="hero is-primary is-fullheight">
            <div id="questionList" class="column is-half">
                @foreach ($data['form'] as $item)
                @foreach(json_decode($item->content) as $i)
                @foreach($data['test'] as $question_number => $test)
                @if(substr($item->id_theforms_cat,0,5) == substr($test->code,0,5))
                @if($i == substr($test->code,5))
                <div class="p-5">
                    {{-- <h4 class="subtitle has-text-centered is-uppercase is-7 navigation">{{ $test->title }}</h4>
                    <h4 class="subtitle is-5">{!! $test->content !!}</h4> --}}
                    <h2 class="pb-4">{{ $test->title }}</h2>
                    <h4 class="text-left ml-3 mb-4">Question {{ $question_number + 1 }}</h4>
                    <div class="question-content">{!! $test->content !!}</div>
                    <h4></h4>
                    <div class="form-check p-0 gap-2 d-flex flex-column" style="gap: 5px;">
                        @foreach(json_decode($test->question) as $index => $ques)
                        <div class="form-control">
                            <div class="form-group text-left d-flex align-items-center" style="gap: 10px;">
                                <input type="radio" id="answer-{{ $test->id.$index }}" data-id="{{ $test->id }}" data-answer="{{ $test->answer }}" name="answer-{{ $test->id }}" value="{{ $ques }}" style="cursor: pointer;">
                                <label class="flex-grow-1 form-check-label flex-grow-1 mr-3" for="answer-{{ $test->id.$index }}" style="cursor: pointer;">{{$ques}}</label>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                @endif
                @endforeach
                @endforeach
                @endforeach
            </div>
            <div class="co  l-sm-12">
                <h3>Title</h3>
                <p>Description</p>
                <div class="input-container">
                    <i class="fas fa-arrow-right icon"></i>
                    <input class="input-field" type="text" placeholder="Nhập câu trả lời" name="">
                </div>
            </div>
            <div>
                <a id="submit" style="margin-bottom: 1rem" href="javascript:void(0)" class="btn btn-success text-light font-weight-bold">Nộp bài</a>
            </div>
        </section>
    </div>
</div>
<script>
    let btnSubmit = document.getElementById('submit');

    let totalQuestion = document.getElementById('questionList').childElementCount;
    let checkedQuestion = 0;
    let rightAnswer = 0;

    btnSubmit.addEventListener('click', () => {
        checkedQuestion = 0;
        document.querySelectorAll('input[name^=answer-]').forEach(function(item) {
            item.disabled = true;
            if (item.attributes['data-answer'].value == item.value) item.parentElement.parentElement.classList.add('alert-success');
        });

        document.querySelectorAll('input[name^=answer-]:checked').forEach(function(item) {
            checkedQuestion++;
            if (item.attributes['data-answer'].value != item.value) item.parentElement.parentElement.classList.add('alert-danger');
            else rightAnswer++;
        });

       alert(`Số câu hỏi: ${totalQuestion}, Đã làm ${checkedQuestion}, Số câu đúng ${rightAnswer}`);
    })
</script>
