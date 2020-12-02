<!--================Blog Area =================-->

 
 
<section class="blog_area single-post-area section_gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 posts-list">
        <div class="single-post row">
          {{-- @foreach($blogs as $item) --}}
          <div class="col-lg-12">
            <div class="feature-img">
              <img class="img-fluid" src="{{ Storage::url('/upload/img/blog/'.$blog->avatar) }}" alt="">
            </div>
          </div>
          <div class="col-lg-3  col-md-3">
            <div class="blog_info text-right">
              <div class="post_tag">
                <a href="#">Food,</a>
                <a class="active" href="#">Technology,</a>
                <a href="#">Politics,</a>
                <a href="#">Lifestyle</a>
              </div>
              <ul class="blog_meta list">
                <li><a href="#">Mark wiens<i class="ti-user"></i></a></li>
                <li><a href="#">12 Dec, 2017<i class="ti-calendar"></i></a></li>
                <li><a href="#">1.2M Views<i class="ti-eye"></i></a></li>
                <li><a href="#">06 Comments<i class="ti-comment"></i></a></li>
              </ul>
              <ul class="social-links">
                <li><a href="#"><i class="ti-facebook"></i></a></li>
                <li><a href="#"><i class="ti-twitter"></i></a></li>
                <li><a href="#"><i class="ti-github"></i></a></li>
                <li><a href="#"><i class="ti-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-9 col-md-9 blog_details">
            <h2>{{$blog->title}}</h2>
            <p class="excert">
              {!!$blog->content!!}
            </p>
          </div>
          <div class="col-lg-12">
            {{-- <div class="quotes">
              Với chúng tối tiếng anh đã là 1 ngôn ngữ không thể thiếu hiện nay, nó như người bạn bên tôi, luôn trò
              truyện trong đầu tôi,
              tôi học hỏi từ "người bạn này rất nhiều, đã giúp ích cho tôi rất nhiều trên con đường thành công, không có
              tiếng anh
              thì tôi đã thất bại ".
            </div> --}}

          </div>
          {{-- @endforeach --}}
        </div>

        <div class="pt-5 mt-5">
          <h3 class="mb-5">{{ $data['count']['comment'] ?? ''}} bình luận</h3>
          </h3>

          <ul  class="comment-list">
            @foreach($comments as $item)
            <li style="list-style:none" class="comment">
              <div class="comment-body">
                <h3> <i  class="fas fa-user-alt"></i> {{$item->com_name}}</h3>
                <p>{{$item->com_content}}</p>
                <div class="meta">{{date('d/m/Y H:i',strtotime($item->created_at))}}</div>

                <div id="one">
                  
                  <button class="btn-reply" onclick="javascript:showDiv();">Trả lời</button>
                  <div id="tow" style="display: none; ">
                    <textarea cols="1" rows="1" class="form-control mt-20" type="text"></textarea>
                  </div>
                </div>


              </div>
            </li>
            <hr>
            @endforeach
          </ul>
          {{$comments->links()}}

          <div class="comment-form-wrap pt-5">
            <form method="post" class="p-5 bg-light">
              <div class="form-group">
                <label for="email">Email của bạn :</label>
                <textarea name="email" id="email" cols="1" rows="1" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label for="name">Họ và tên của bạn :</label>
                <textarea name="name" id="name" cols="1" rows="1" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label for="message">Bình luận đánh giá :</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
              </div>
              <div class="form-group">
                {{-- <input type="submit" value="Gửi" class="btn py-3 px-4 btn-primary"> --}}
                <button type="submit" class="btn py-2 px-3 btn-primary">Gửi</button>
              </div>
              {{csrf_field()}}
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="blog_right_sidebar">
          <aside class="single_sidebar_widget search_widget">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search Posts">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="ti-search"></i></button>
              </span>
            </div>
            <div class="br"></div>
          </aside>
          <aside class="single_sidebar_widget author_widget">
            <img class="author_img rounded-circle" src="img/blog/author.png" alt="">
            <h4>Charlie Barber</h4>
            <p>Senior blog writer</p>
            <div class="social_icon">
              <a href="#"><i class="ti-facebook"></i></a>
              <a href="#"><i class="ti-twitter"></i></a>
              <a href="#"><i class="ti-github"></i></a>
              <a href="#"><i class="ti-linkedin"></i></a>

            </div>
            <div class="arrow">
              {{-- <a href="{{ route('newsDetail') }}"><i class="text-white ti-arrow-left"></i></a> --}}
            </div>

            <div class="detials">
              <p>Prev Post</p>
              <a href="">
                <h4>Space The Final Frontier</h4>
              </a>

            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
          <div class="detials">
            <p>Next Post</p>
            <a href="">
              <h4>Telescopes 101</h4>
            </a>
          </div>
          <div class="arrow">
            {{-- <a href="{{ route('newsDetail') }}"><i class="text-white ti-arrow-right"></i></a> --}}
          </div>
          <div class="thumb">
            {{-- <a href="{{ route('newsDetail') }}"><img class="img-fluid" src="{{ asset('dist/img/blog/next.jpg') }}"
              alt=""></a> --}}
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>
</section>

<div class="popular_courses">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="main_title">
          <h2 class="mb-3 pb-5">Bài viết có liên quan</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- single course -->
      
      <div class="col-lg-12 height">
        <div class="owl-carousel active_course">
          @forelse($blogs as $item)
          <div class="single_course">
            <div class="course_head">
              <img class="img-fluid" src="{{ asset('dist/img/courses/c1.jpg') }}" alt="" />
            </div>
            <div class="course_content">
              <span class="tag mb-4 d-inline-block">Tips</span>
              <h4 class="mb-3">
              <a href="course-details.html">{{$item->title}}</a>
              </h4>
              <p>
                {!! $item->summary !!}
              </p>
              <div
                class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                <div class="authr_meta">
                  <span class="d-inline-block ml-2">
                    <i class="ti-time mr-2">20/10</i>
                  </span>
                </div>
                <div class="mt-lg-0 mt-3">
                  <span class="meta_info">
                    <a href="#"><i class="ti-heart mr-2"></i></a>
                  </span>
                  <span class="meta_info">
                    <a href="#"><i class="ti-comment mr-2"></i></a>
                  </span>
                  <span class="meta_info">
                    <a href="#"><i class="ti-share mr-2"></i></a>
                  </span>
                </div>
              </div>
            </div>
          </div>
          @empty
            <h1 class="text-center">Chưa có dữ liệu cho phần này</h1>
          @endforelse
        </div>
      </div>
    </div>
  </div>
</div>



<script>
  function showDiv() {
    div = document.getElementById('tow');
    div.style.display = "block";
}
</script>