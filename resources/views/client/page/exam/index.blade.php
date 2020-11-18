<div style="padding-top: 80px" class="container">
  <div class="row">
    <section class="hero is-primary is-fullheight">
      <div class="column is-half">
        @foreach ($data['form'] as $item)
        @foreach(json_decode($item->content) as $i)
        @foreach($data['test'] as $test)
        @if(substr($item->id_theforms_cat,0,5) == substr($test->code,0,5))
        @if($i == substr($test->code,5))
        <div class="has-text-centered">
          <h4 class="subtitle has-text-centered is-uppercase is-7 navigation">{{ $test->title }}</h4>
          <h6 class="subtitle has-text-centered is-5">{!! $test->content !!}</h6>
          <form action="#" method="GET">
            @foreach(json_decode($test->question) as $ques)
            <div class="form-group">
              <p class="option form-inline">
                <input type="radio" name="answer" value="{{ $item->answer }}">
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
        <a style="margin-bottom: 1rem" href="javascript:void(0)" class="btn btn-success">Nộp bài</a>
      </div>
    </section>
  </div>
</div>