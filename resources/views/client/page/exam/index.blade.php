<div style="padding-top: 100px" class="container">
  @foreach ($data['form'] as $item)
     <h1 class="title has-text-centered">Chủ đề</h1>
    @foreach(json_decode($item->content) as $i)
        @foreach($data['test'] as $test)
          {{-- @foreach($data['FormCate'] as $cate) --}}
          {{-- @dd(substr($item->id_theforms_cat,0,5)) --}}
            @if(substr($item->id_theforms_cat,0,5) == substr($test->code,0,5))
              {{-- @if($cate->id == substr($test->code,5,2)) --}}
                @if($i == substr($test->code,5))
              <section class="hero is-primary is-fullheight">
              <div class="column is-half">
                  <div class="has-text-centered">
                      <h1 class="subtitle has-text-centered is-uppercase is-7 navigation">{{ $test->title }}</h1>
                      <h2 class="subtitle has-text-centered is-5">{!! $test->content !!}</h2>
                      <form action="#" method="GET">
                        @foreach(json_decode($test->question) as $ques)
                          <p class="option has-text-grey-dark">
                              <input type="radio" name="answer" value="a">
                              <span class="has-text-weight-bold is-size-5">A</span>&nbsp;{{$ques}}
                          </p>
                        @endforeach
                      </form>
                      <hr>
                  </div>
              </div>
            </section>
            {{-- @endif --}}
            @endif
          @endif
        {{-- @endforeach --}}
        @endforeach
       
    @endforeach
  @endforeach 
  <div class="text-center">
    <a class="btn btn-success button">Nộp bài</a>
  </div>
</div>