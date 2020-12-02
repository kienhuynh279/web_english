<!--================Blog Area =================-->
<section class="blog_area single-post-area section_gap">
  <div class="container">
    <div class="row">
              <div class="col-lg-8 posts-list">
                <div class="single-post row">
                  @foreach($blogs as $item)
                  <div class="col-lg-12">
                    <div class="feature-img">
                      <img class="img-fluid" src="{{ Storage::url('/upload/img/blog/'.$item->avatar) }}" alt="">
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
                    <h2>{{$item->title}}</h2>
                    <p class="excert">
                      {!!$item->content!!}
                    </p>
                  </div>
                  <div class="col-lg-12">
                    <div class="quotes">
                      Với chúng tối tiếng anh đã là 1 ngôn ngữ không thể thiếu hiện nay, nó như người bạn bên tôi, luôn trò truyện trong đầu tôi,
                      tôi học hỏi từ "người bạn này rất nhiều, đã giúp ích cho tôi rất nhiều trên con đường thành công, không có tiếng anh 
                      thì tôi đã thất bại ".
                    </div>
                  </div>
                  @endforeach
                </div>

                <div class="pt-5 mt-5">
                  <h3 class="mb-5">{{ $data['count']['comment'] ?? ''}} bình luận</h3></h3>
                 
                      <ul class="comment-list">
                        @foreach($comments as $item)
                          <li class="comment">
                            <div class="comment-body">
                              <h3> <i class="fas fa-user-alt"></i>  {{$item->com_name}}</h3>
                              <p>{{$item->com_content}}</p>
                              <div class="meta">{{date('d/m/Y H:i',strtotime($item->created_at))}}</div>
                              <p>
                                <a href="" id="reply" class="reply">Reply</a>
                             
                              </p>
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
                    <p>Boot camps have its supporters andit sdetractors. Some people do not understand why you
                      should have to spend money on boot camp when you can get. Boot camps have itssuppor
                      ters andits detractors.</p>
                    <div class="br"></div>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                    <h3 class="widget_title">Popular Posts</h3>
                    <div class="media post_item">
                      <img src="{{ asset('dist/img/blog/popular-post/post1.jpg') }}" alt="post">
                      <div class="media-body">
                        <a href="blog-details.html">
                          <h3>Space The Final Frontier</h3>
                        </a>
                        <p>02 Hours ago</p>
                      </div>
                    </div>
                    <div class="media post_item">
                      <img src="{{asset('dist/img/blog/popular-post/post2.jpg') }}" alt="post">
                      <div class="media-body">
                        <a href="blog-details.html">
                          <h3>The Amazing Hubble</h3>
                        </a>
                        <p>02 Hours ago</p>
                      </div>
                    </div>
                    <div class="media post_item">
                      <img src="{{ asset('dist/img/blog/popular-post/post3.jpg') }}" alt="post">
                      <div class="media-body">
                        <a href="blog-details.html">
                          <h3>Astronomy Or Astrology</h3>
                        </a>
                        <p>03 Hours ago</p>
                      </div>
                    </div>
                    <div class="media post_item">
                      <img src="{{ asset('dist/img/blog/popular-post/post4.jpg') }}" alt="post">
                      <div class="media-body">
                        <a href="blog-details.html">
                          <h3>Asteroids telescope</h3>
                        </a>
                        <p>01 Hours ago</p>
                      </div>
                    </div>
                    <div class="br"></div>
                  </aside>

                  <aside class="single_sidebar_widget post_category_widget">
                    <h4 class="widget_title">Post Catgories</h4>
                    <ul class="list cat-list">
                      <li>
                        <a href="#" class="d-flex justify-content-between">
                          <p>Technology</p>
                          <p>37</p>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="d-flex justify-content-between">
                          <p>Lifestyle</p>
                          <p>24</p>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="d-flex justify-content-between">
                          <p>Fashion</p>
                          <p>59</p>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="d-flex justify-content-between">
                          <p>Art</p>
                          <p>29</p>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="d-flex justify-content-between">
                          <p>Food</p>
                          <p>15</p>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="d-flex justify-content-between">
                          <p>Architecture</p>
                          <p>09</p>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="d-flex justify-content-between">
                          <p>Adventure</p>
                          <p>44</p>
                        </a>
                      </li>
                    </ul>
                    <div class="br"></div>
                  </aside>
                  <aside class="single-sidebar-widget newsletter_widget">
                    <h4 class="widget_title">Newsletter</h4>
                    <p>
                      Here, I focus on a range of items and features that we use in life without
                      giving them a second thought.
                    </p>
                    <div class="form-group d-flex flex-row">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="ti-email" aria-hidden="true"></i></div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email"
                          onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                      </div>
                      <a href="#" class="bbtns">Subcribe</a>
                    </div>
                    <p class="text-bottom">You can unsubscribe at any time</p>
                    <div class="br"></div>
                  </aside>
                  <aside class="single-sidebar-widget tag_cloud_widget">
                    <h4 class="widget_title">Tag Clouds</h4>
                    <ul class="list">
                      <li><a href="#">Technology</a></li>
                      <li><a href="#">Fashion</a></li>
                      <li><a href="#">Architecture</a></li>
                      <li><a href="#">Fashion</a></li>
                      <li><a href="#">Food</a></li>
                      <li><a href="#">Technology</a></li>
                      <li><a href="#">Lifestyle</a></li>
                      <li><a href="#">Art</a></li>
                      <li><a href="#">Adventure</a></li>
                      <li><a href="#">Food</a></li>
                      <li><a href="#">Lifestyle</a></li>
                      <li><a href="#">Adventure</a></li>
                    </ul>
                  </aside>
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
          <h2 class="mb-3">News - Tips Relate</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- single course -->

      <div class="col-lg-12">
        <div class="owl-carousel active_course">
          <div class="single_course">
            <div class="course_head">
              <img class="img-fluid" src="{{ asset('dist/img/courses/c1.jpg') }}" alt="" />
            </div>
            <div class="course_content">
              <span class="tag mb-4 d-inline-block">Tips</span>
              <h4 class="mb-3">
                <a href="course-details.html">Learn English with 6 tip</a>
              </h4>
              <p>
                Learn Now, Remember Later: 6 Tips for Improving Your English Effectively Right Now
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

          <div class="single_course">
            <div class="course_head">
              <img class="img-fluid" src="{{ asset('dist/img/courses/c1.jpg') }}" alt="" />
            </div>
            <div class="course_content">
              <span class="tag mb-4 d-inline-block">News</span>
              <h4 class="mb-3">
                <a href="course-details.html">Learn English with 6 tip</a>
              </h4>
              <p>
                Learn Now, Remember Later: 6 Tips for Improving Your English Effectively Right Now
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

          <div class="single_course">
            <div class="course_head">
              <img class="img-fluid" src="{{ asset('dist/img/courses/c1.jpg') }}" alt="" />
            </div>
            <div class="course_content">
              <span class="tag mb-4 d-inline-block">News</span>
              <h4 class="mb-3">
                <a href="course-details.html">Test</a>
              </h4>
              <p>
                Learn Now, Remember Later: 6 Tips for Improving Your English Effectively Right Now
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

        </div>
      </div>
    </div>
  </div>
</div>