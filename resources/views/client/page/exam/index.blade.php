<div style="padding-top: 80px" class="container">
  <div class="row"> 
    <h1 class="text-center title has-text-centered">Chủ đề</h1>
      @foreach ($data['form'] as $item)
      @foreach(json_decode($item->content) as $i)
      @foreach($data['test'] as $test)
      @if(substr($item->id_theforms_cat,0,5) == substr($test->code,0,5))
      @if($i == substr($test->code,5))
              <section class="hero is-primary is-fullheight">
                <div class="column is-half">
                  <div class="has-text-centered">
                      <h1 class="subtitle has-text-centered is-uppercase is-7 navigation">{{ $test->title }}</h1>
                      <h2 class="subtitle has-text-centered is-5">{!! $test->content !!}</h2>
                      <form action="#" method="GET">
                        @foreach(json_decode($test->question) as $ques)
                          <p class="option has-text-grey-dark">
                          <input type="radio" name="answer" value="{{ $item->answer }}">
                              <span class="has-text-weight-bold is-size-5">A</span>&nbsp;{{$ques}}
                          </p>
                        @endforeach
                      </form>
                      <hr>
                  </div>
              </div>
            </section>
      @endif
      @endif
      @endforeach
      @endforeach
      @endforeach 
      <div class="text-center">
        <a class="btn-register">Nộp bài</a>
      </div>
</div>
</div>