<div style="padding-top: 50px" class="container">
  @foreach ($data['form'] as $item)
     <h1 class="title has-text-centered">Chủ đề</h1>
    @foreach(json_decode($item->content) as $i)
        @foreach($data['test'] as $test)
          @if($i == substr($test->id,5))
           <section class="hero is-primary is-fullheight">
              <div class="column is-half">
                  <div class="has-text-centered">
                      <h6 class="subtitle has-text-centered is-uppercase is-7 navigation">{{ $test->title }}</h6>
                      <h2 class="subtitle has-text-centered is-5">{!! $test->content !!}</h2>
                      <form action="#" method="GET">
                          <p class="option has-text-grey-dark">
                              <input type="radio" name="answer" value="a">
                              <span class="has-text-weight-bold is-size-5">A</span>&nbsp;Đáp án a
                          </p>
                          <p class="option has-text-grey-dark">
                              <input type="radio" name="answer" value="b">
                              <span class="has-text-weight-bold is-size-5">B</span>&nbsp;Đáp án b
                          </p>
                          <p class="option has-text-grey-dark">
                              <input type="radio" name="answer" value="c">
                              <span class="has-text-weight-bold is-size-5">C</span>&nbsp;Đáp án c
                          </p>
                          <p class="option has-text-grey-dark">
                              <input type="radio" name="answer" value="d">
                              <span class="has-text-weight-bold is-size-5">D</span>&nbsp;Đáp án d
                          </p>
                      </form>
                      <hr>
                  </div>
              </div>
            </section>
          @endif
        @endforeach
       
    @endforeach
  @endforeach 
  <div class="text-center">
    <a class="btn btn-success button">Nộp bài</a>
  </div>
</div>