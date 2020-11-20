<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <p class="text-uppercase">
                            Cùng học anh văn thật tốt với chúng tôi
                        </p>
                        <h2 class="text-uppercase mt-4 mb-5">
                            Tiếng anh mỗi ngày
                        </h2>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feature_area section_gap_top">
    <div class="container border bg-light" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 11px 0px;border-radius: 20px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="my-banner-title w-100 text-center"><span>CHỨNG CHỈ</span></div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a href="{{ route('course') }}" class="d-flex justify-content-center">
                        @if(!empty($banner))
                        @foreach($banner as $item )
                        @if($item->status == 1)
                        @if($item->id == 89)
                        <img class="banner w-75" src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}">
                        @endif
                        @endif
                        @endforeach
                        @endif
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{ route('course') }}" class="d-flex justify-content-center">
                        {{-- <p style="font-weight: bold; margin-top: 20px;color:#42f54e; text-align:center; font-size: 36px">TOEFL</p> --}}
                        @if(!empty($banner))
                        @foreach($banner as $item )
                        @if($item->status == 1)
                        @if($item->id == 90)
                        <img class="banner w-75" src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}">
                        @endif
                        @endif
                        @endforeach
                        @endif
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{ route('course') }}" class="d-flex justify-content-center">
                        @if(!empty($banner))
                        @foreach($banner as $item )
                        @if($item->status == 1)
                        @if($item->id == 91)
                        <img class="banner w-75" src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}">
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
                <div class="my-banner-title w-100 text-center"><span>ÔN THI LỚP 10</span></div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a href="{{ route('course') }}" class="d-flex justify-content-center">
                        @if(!empty($banner))
                        @foreach($banner as $item )
                        @if($item->status == 1)
                        @if($item->id == 92)
                        <img class="banner w-75" src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}">
                        @endif
                        @endif
                        @endforeach
                        @endif
                        {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">Theo dạng bài</p> --}}
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{ route('course') }}" class="d-flex justify-content-center">
                        @if(!empty($banner))
                        @foreach($banner as $item )
                        @if($item->status == 1)
                        @if($item->id == 93)
                        <img class="banner w-75" src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}">
                        @endif
                        @endif
                        @endforeach
                        @endif
                        {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">Theo đề thi</p> --}}
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{ route('course') }}" class="d-flex justify-content-center">
                        @if(!empty($banner))
                        @foreach($banner as $item )
                        @if($item->status == 1)
                        @if($item->id == 94)
                        <img class="banner w-75" src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}">
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
                <div class="my-banner-title w-100 text-center"><span>Ôn thi THPT</span></div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a href="{{ route('course') }}" class="d-flex justify-content-center">
                        {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">Theo dạng bài</p> --}}
                        @if(!empty($banner))
                        @foreach($banner as $item )
                        @if($item->status == 1)
                        @if($item->id == 95)
                        <img class="banner w-75" src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}">
                        @endif
                        @endif
                        @endforeach
                        @endif
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{ route('course') }}" class="d-flex justify-content-center">
                        {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">Theo đề thi</p> --}}
                        @if(!empty($banner))
                        @foreach($banner as $item )
                        @if($item->status == 1)
                        @if($item->id == 96)
                        <img class="banner w-75" src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}">
                        @endif
                        @endif
                        @endforeach
                        @endif
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{ route('course') }}" class="d-flex justify-content-center">
                        {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">Theo chuyên đề</p> --}}
                        @if(!empty($banner))
                        @foreach($banner as $item )
                        @if($item->status == 1)
                        @if($item->id == 97)
                        <img class="banner w-75" src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}">
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
                <div class="my-banner-title w-100 text-center"><span>Ôn thi Đại học</span></div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a href="{{ route('course') }}" class="d-flex justify-content-center">
                        {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">Theo dạng bài</p> --}}
                        @if(!empty($banner))
                        @foreach($banner as $item )
                        @if($item->status == 1)
                        @if($item->id == 98)
                        <img class="banner w-75" src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}">
                        @endif
                        @endif
                        @endforeach
                        @endif
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{ route('course') }}" class="d-flex justify-content-center">
                        {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">Theo đề thi</p> --}}
                        @if(!empty($banner))
                        @foreach($banner as $item )
                        @if($item->status == 1)
                        @if($item->id == 99)
                        <img class="banner w-75" src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}">
                        @endif
                        @endif
                        @endforeach
                        @endif
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="{{ route('course') }}" class="d-flex justify-content-center">
                        {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">Theo chuyên đề</p> --}}
                        @if(!empty($banner))
                        @foreach($banner as $item )
                        @if($item->status == 1)
                        @if($item->id == 100)
                        <img class="banner w-75" src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}">
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
                <div class="my-banner-title w-100 text-center"><span>Tiếng Anh Chuyên Nghành</span></div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <a href="{{ route('course') }}" class="d-flex justify-content-center">
                        @if(!empty($banner))
                        @foreach($banner as $item )
                        @if($item->status == 1)
                        @if($item->id == 101)
                        <img class="banner w-75" src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}">
                        @endif
                        @endif
                        @endforeach
                        @endif
                        {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">Điện lạnh</p> --}}
                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="{{ route('course') }}" class="d-flex justify-content-center">
                        @if(!empty($banner))
                        @foreach($banner as $item )
                        @if($item->status == 1)
                        @if($item->id == 102)
                        <img class="banner w-75" src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}">
                        @endif
                        @endif
                        @endforeach
                        @endif
                        {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">Điện dân dụng</p> --}}
                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="{{ route('course') }}" class="d-flex justify-content-center">
                        @if(!empty($banner))
                        @foreach($banner as $item )
                        @if($item->status == 1)
                        @if($item->id == 103)
                        <img class="banner w-75" src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}">
                        @endif
                        @endif
                        @endforeach
                        @endif
                        {{-- <p style="font-weight: bold; margin-top: 20px;color:#00d0ff; text-align:center; font-size: 36px">Thư tín, thương mại</p> --}}
                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="{{ route('course') }}" class="d-flex justify-content-center">
                        @if(!empty($banner))
                        @foreach($banner as $item )
                        @if($item->status == 1)
                        @if($item->id == 104)
                        <img class="banner w-75" src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}">
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
            <div class="col-sm-12">
                <div id="tips" class="owl-carousel owl-theme">
                    @foreach($blog as $item)
                    <div class="single_course mx-5">
                        <div class="course_head">
                            <img class="img-fluid" style="height: 300px" src="{{Storage::url('upload/img/blog/'.$item->avatar)}}" alt="" />
                        </div>
                        <div class="course_content">
                            <span class="tag mb-4 d-inline-block">Mẹo</span>
                            <h4 class="mb-3">
                                <a href="">{{ $item->title }}</a>
                            </h4>
                            <p>{!! $item->summary !!}</p>
                            <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                <div class="authr_meta">
                                    <span class="d-inline-block ml-2">
                                        <i class="ti-time mr-2">{{ $item->created_at->format('d/m/yy') }}</i>
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
                <div style="background-color:#fff" class="single_feature text-center rounded">
                    <div class="icon">
                        <span>
                            <img src="{{ asset('dist/img/social/facebook.png') }}" width="15%" height="15%">
                            <a style="color:#2d142c" href="#">Qua Facebook</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div style="background-color:#fff" class="single_feature text-center rounded">
                    <div class="icon">
                        <span>
                            <img src="{{ asset('dist/img/social/instagram.png') }}" width="15%" height="15%">
                            <a style="color:#2d142c" href="#">Qua Instagram</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div style="background-color:#fff" class="single_feature text-center rounded">
                    <div class="icon">
                        <span>
                            <img src="{{ asset('dist/img/social/telephone.png') }}" width="15%" height="15%">
                            <a style="color:#2d142c" href="#">Qua Email</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-section-center">
    <div class="container">
        <img src="{{ asset('dist/img/docs/text-1.jpeg') }}" width="100%" height="100%">
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
        <div class="row mb-5">
            <div class="col-sm-12">
                <div id="rating" class="owl-carousel owl-theme">
                    <div class="row px-5">
                        <div class="col-sm-3 text-center text-md-none">
                            <img class="rounded" src="{{ asset('dist/img/banner/banner-2.jpg') }}">
                        </div>
                        <div class="col-sm-9">
                            <p class="ratting-content" style="font-size: 1.2rem">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus amet eveniet consequuntur officia exercitationem, earum totam maxime aut magnam sit qui expedita! Inventore, modi. Enim quam deserunt molestiae perspiciatis rem?</p>
                            <h6 class="ratting-name">Trung kiên</h6>
                        </div>
                    </div>
                    <div class="row px-5">
                        <div class="col-sm-3 text-center text-md-none">
                            <img class="rounded" src="{{ asset('dist/img/banner/banner-2.jpg') }}">
                        </div>
                        <div class="col-sm-9">
                            <p class="ratting-content" style="font-size: 1.2rem">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet expedita repudiandae earum. Sit illum ullam, quos tempore voluptatum maxime, et voluptates ipsum repellat placeat dicta, aliquam a commodi. Consectetur, eius. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus amet eveniet consequuntur officia exercitationem, earum totam maxime aut magnam sit qui expedita! Inventore, modi. Enim quam deserunt
                                molestiae perspiciatis rem?</p>
                            <h6 class="ratting-name">Trung kiên</h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
