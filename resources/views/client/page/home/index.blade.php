<section class="feature_area section_gap_top">
      <div class="container border" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 11px 0px;border-radius: 20px">
        <div class="container">
          <div class="row justify-content-center">  
                  <div class="my-banner-title"><span>CHỨNG CHỈ</span></div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <a href="{{ route('course') }}">
                @if(!empty($banner))
                  @foreach($banner as $item )
                    @if($item->status == 1)
                      @if($item->id == 89)
                        <img src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}" width="70%" alt="">
                      @endif
                    @endif
                  @endforeach
                @endif
              </a>
            </div>
            <div class="col-sm-4">
              <a href="{{ route('course') }}">
                {{-- <p style="font-weight: bold; margin-top: 20px;color:#42f54e; text-align:center; font-size: 36px">TOEFL</p> --}}
                @if(!empty($banner))
                  @foreach($banner as $item )
                    @if($item->status == 1)
                      @if($item->id == 90)
                        <img src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}" width="70%" alt="">
                      @endif
                    @endif
                  @endforeach
                @endif
              </a>
            </div>
            <div class="col-sm-4">
              <a href="{{ route('course') }}">
                @if(!empty($banner))
                  @foreach($banner as $item )
                    @if($item->status == 1)
                      @if($item->id == 91)
                        <img src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}" width="70%" alt="">
                      @endif
                    @endif
                  @endforeach
                @endif
                {{-- <p style="font-weight: bold; margin-top: 20px;color:#42f54e; text-align:center; font-size: 36px">IELTS</p> --}}
              </a>
            </div>
          </div>
          
        </div>
        

        <div class="container">
          <div class="row justify-content-center">  
            <div  class="my-banner-title"><span>ÔN THI LỚP 10</span></div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <a href="{{ route('course') }}">
                @if(!empty($banner))
                  @foreach($banner as $item )
                    @if($item->status == 1)
                      @if($item->id == 92)
                        <img src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}" width="70%" alt="">
                      @endif
                    @endif
                  @endforeach
                @endif
                {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">Theo dạng bài</p> --}}
              </a>
            </div>
            <div class="col-sm-4">
              <a href="{{ route('course') }}">
                @if(!empty($banner))
                  @foreach($banner as $item )
                    @if($item->status == 1)
                      @if($item->id == 93)
                        <img src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}" width="70%" alt="">
                      @endif
                    @endif
                  @endforeach
                @endif
                {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">Theo đề thi</p> --}}
              </a>
            </div>
            <div class="col-sm-4">
              <a href="{{ route('course') }}">
                @if(!empty($banner))
                  @foreach($banner as $item )
                    @if($item->status == 1)
                      @if($item->id == 94)
                        <img src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}" width="70%" alt="">
                      @endif
                    @endif
                  @endforeach
                @endif
                {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">Theo chuyên đề</p> --}}
              </a>
            </div>
          </div>
          
        </div>

        <div class="container">
          <div class="row justify-content-center">  
                  <div  class="my-banner-title"><span>Ôn thi THPT</span></div>
          </div>
          <div class="row">
           <div class="col-sm-4">
              <a href="{{ route('course') }}">
                {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">Theo dạng bài</p> --}}
                @if(!empty($banner))
                  @foreach($banner as $item )
                    @if($item->status == 1)
                      @if($item->id == 95)
                        <img src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}" width="70%" alt="">
                      @endif
                    @endif
                  @endforeach
                @endif
              </a>
            </div>
            <div class="col-sm-4">
              <a href="{{ route('course') }}">
                {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">Theo đề thi</p> --}}
                @if(!empty($banner))
                @foreach($banner as $item )
                  @if($item->status == 1)
                    @if($item->id == 96)
                      <img src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}" width="70%" alt="">
                    @endif
                  @endif
                @endforeach
              @endif
              </a>
            </div>
            <div class="col-sm-4">
              <a href="{{ route('course') }}">
                {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">Theo chuyên đề</p> --}}
                @if(!empty($banner))
                @foreach($banner as $item )
                  @if($item->status == 1)
                    @if($item->id == 97)
                      <img src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}" width="70%" alt="">
                    @endif
                  @endif
                @endforeach
              @endif
              </a>
            </div>
          </div>
        </div>
        
        <div class="container">
          <div class="row justify-content-center">  
                  <div  class="my-banner-title"><span>Ôn thi Đại học</span></div>
          </div>
          <div class="row">
           <div class="col-sm-4">
              <a href="{{ route('course') }}">
                {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">Theo dạng bài</p> --}}
                @if(!empty($banner))
                @foreach($banner as $item )
                  @if($item->status == 1)
                    @if($item->id == 98)
                      <img src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}" width="70%" alt="">
                    @endif
                  @endif
                @endforeach
              @endif
              </a>
            </div>
            <div class="col-sm-4">
              <a href="{{ route('course') }}">
                {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">Theo đề thi</p> --}}
                @if(!empty($banner))
                @foreach($banner as $item )
                  @if($item->status == 1)
                    @if($item->id == 99)
                      <img src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}" width="70%" alt="">
                    @endif
                  @endif
                @endforeach
              @endif
              </a>
            </div>
            <div class="col-sm-4">
              <a href="{{ route('course') }}">
                {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">Theo chuyên đề</p> --}}
                @if(!empty($banner))
                @foreach($banner as $item )
                  @if($item->status == 1)
                    @if($item->id == 100)
                      <img src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}" width="70%" alt="">
                    @endif
                  @endif
                @endforeach
              @endif
              </a>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row justify-content-center">  
                  <div  class="my-banner-title"><span>Tiếng Anh Chuyên Nghành</span></div>
          </div>
          <div class="row">
           <div class="col-sm-3">
              <a href="{{ route('course') }}">
                @if(!empty($banner))
                @foreach($banner as $item )
                  @if($item->status == 1)
                    @if($item->id == 101)
                      <img src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}" width="70%" alt="">
                    @endif
                  @endif
                @endforeach
              @endif
                {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">Điện lạnh</p> --}}
              </a>
            </div>
            <div class="col-sm-3">
              <a href="{{ route('course') }}">
                @if(!empty($banner))
                @foreach($banner as $item )
                  @if($item->status == 1)
                    @if($item->id == 102)
                      <img src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}" width="70%" alt="">
                    @endif
                  @endif
                @endforeach
              @endif
                {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">Điện dân dụng</p> --}}
              </a>
            </div>
            <div class="col-sm-3">
              <a href="{{ route('course') }}">
                @if(!empty($banner))
                @foreach($banner as $item )
                  @if($item->status == 1)
                    @if($item->id == 103)
                      <img src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}" width="70%" alt="">
                    @endif
                  @endif
                @endforeach
              @endif
                {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">Thư tín, thương mại</p> --}}
              </a>
            </div>
            <div class="col-sm-3">
              <a href="{{ route('course') }}">
                @if(!empty($banner))
                @foreach($banner as $item )
                  @if($item->status == 1)
                    @if($item->id == 104)
                      <img src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}" width="70%" alt="">
                    @endif
                  @endif
                @endforeach
              @endif
                {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">NH-KS</p> --}}
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Socical Contact-->
      
    <!--Socical Contact End-->
   

    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Đề Thi Mới Nhất</h2>
            </div>
          </div>
        </div>
        <div class="row">
            @foreach($form as $i)
            <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title"><span class="badge badge-primary">Kiểm tra</span> {{ $i->title }}</h4>
                <div class="row">
                  <div class="col-sm-6">
                    <p>Số câu: 40 câu</p>
                  </div>
                  <div class="col-sm-6">
                    <p>Thời gian: 60 phút</p>
                  </div>
                </div>
                <a href="{{ route('test', $i->id) }}" class="btn btn-success">Bắt đầu</a>
              </div>
            </div>
            </div>
            @endforeach
        </div>
        </div>
      </div>
    </div>
    
    <div class="popular_courses">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Mẹo & Tin Tức</h2>            
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single course -->
          <div class="col-lg-12">
            <div class="owl-carousel active_course">
            @foreach($blog as $item)
              <div class="single_course">
                <div class="course_head">
                  <img class="img-fluid" src="{{Storage::url('upload/img/blog/',$blog->avatar)}}" alt="" />
                </div>
                <div class="course_content">
                  <span class="tag mb-4 d-inline-block">Mẹo</span>
                  <h4 class="mb-3">
                    <a href="{{ route('newsDetail') }}">{{ $item->title }}</a>
                  </h4>
                  <p>{!! $item->summary !!}</p>
                  <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                    <div class="authr_meta">
                      <span class="d-inline-block ml-2">
                        <i class="ti-time mr-2">{{ $item->created_at->format('d/m/y') }}</i>
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
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

    <section style="padding-top:0; padding-bottom:20px" class="feature_area section_gap">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
              <div class="main_title">
                <h3 class="mb-3">Liên hệ</h3>
              </div>
            </div>
          </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div style="background-color:#fff" class="single_feature text-center">
              <div class="icon">
                <span>
                  <img src="{{ asset('dist/img/social/facebook.png') }}" width="15%" height="15%">
                  <a style="color:#2d142c" href="">Account FB</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div style="background-color:#fff" class="single_feature text-center">
              <div class="icon">
                <span>
                  <img src="{{ asset('dist/img/social/instagram.png') }}" width="15%" height="15%">
                  <a style="color:#2d142c" href="">Account Ins</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div style="background-color:#fff" class="single_feature text-center">
              <div class="icon">
                <span>
                  <img src="{{ asset('dist/img/social/telephone.png') }}" width="15%" height="15%">
                  <a style="color:#2d142c" href=""> Account Mail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<section class="my-section">
<div class="container">
<div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Đánh giá</h2>            
            </div>
          </div>
        </div>
  <div class="row">
      <div class="col-sm-12">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <ul class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
              </ul>
              
              <!-- The slideshow -->
              <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-sm-4">
                        @if(!empty($banner))
                        @foreach($banner as $item )
                          @if($item->status == 1)
                            @if($item->id == 105)
                              <img class="img-ratting"  src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}"  width="100%" height="100%" alt="">
                            @endif
                          @endif
                        @endforeach
                      @endif
                        {{-- <img class="img-ratting" src="{{ asset('dist/img/banner/banner-2.jpg') }}" alt="Los Angeles" width="100%" height="100%"> --}}
                      </div>
                       <div class="col-sm-8">
                        <p class="ratting-content">"Từ khi tự học ở Web, con thấy tự tin hơn trong giao tiếp vì có nhiều cơ hội trò chuyện với thầy cô người nước ngoài. Thầy cô bản ngữ nên luôn được chỉnh sửa khi có lỗi phát âm.
                         Điều này giúp con rèn luyện được cách phát âm của mình và nói tốt hơn rất nhiều."</p>
                         <h6 class="ratting-name">Trung kiên</h6>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                      <div class="col-sm-4">
                        <img class="img-ratting" src="{{ asset('dist/img/banner/banner-2.jpg') }}" alt="Los Angeles" width="100%" height="100%">
                      </div>
                       <div class="col-sm-8">
                        <p class="ratting-content">"Từ khi tự học ở Web, con thấy tự tin hơn trong giao tiếp vì có nhiều cơ hội trò chuyện với thầy cô người nước ngoài. Thầy cô bản ngữ nên luôn được chỉnh sửa khi có lỗi phát âm.
                         Điều này giúp con rèn luyện được cách phát âm của mình và nói tốt hơn rất nhiều."</p>
                         <h6 class="ratting-name">Trung kiên</h6>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                      <div class="col-sm-4">
                        <img class="img-ratting" src="{{ asset('dist/img/banner/banner-2.jpg') }}" alt="Los Angeles" width="100%" height="100%">
                      </div>
                       <div class="col-sm-8">
                        <p class="ratting-content">"Từ khi tự học ở Web, con thấy tự tin hơn trong giao tiếp vì có nhiều cơ hội trò chuyện với thầy cô người nước ngoài. Thầy cô bản ngữ nên luôn được chỉnh sửa khi có lỗi phát âm.
                         Điều này giúp con rèn luyện được cách phát âm của mình và nói tốt hơn rất nhiều."</p>
                         <h6 class="ratting-name">Trung kiên</h6>
                      </div>
                    </div>
                  </div>
              </div>
              
              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
              </a>
          </div>
      </div>
    </div>
  </div>
</section>

