<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <p class="text-uppercase wow fadeInLeftBig" data-wow-duration=".2" data-wow-delay=".2s">
                            Cùng học anh văn thật tốt với chúng tôi
                        </p>
                        <h2 class="text-uppercase mt-4 mb-5 wow fadeInRightBig" data-wow-duration=".2" data-wow-delay=".2s">
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

<section class="pt-5 pb-5 ftco-section">
    <div class="container border bg-light " style="box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 11px 0px;border-radius: 20px">
        <div class="container wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
            <div class="row justify-content-center">
                <div style="background-color: #f20544;" class="my-banner-title w-100 text-center"><span>CHỨNG CHỈ</span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">

                    <a href="#" class="d-flex justify-content-center">
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
                    <a href="#" class="d-flex justify-content-center">
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
                    <a href="#" class="d-flex justify-content-center">
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


        <div class="container wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
            <div class="row justify-content-center">
                <div style="background-color: #f25c78;" class="my-banner-title w-100 text-center"><span>ÔN THI LỚP
                        10</span></div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a href="#" class="d-flex justify-content-center">
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
                    <a href="#" class="d-flex justify-content-center">
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
                    <a href="#" class="d-flex justify-content-center">
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

        <div class="container  wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
            <div class="row justify-content-center">
                <div style="background-color: #f2c6c2;" class="my-banner-title w-100 text-center"><span>Ôn thi
                        THPT</span></div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a href="#" class="d-flex justify-content-center">
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
                    <a href="#" class="d-flex justify-content-center">
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
                    <a href="#" class="d-flex justify-content-center">
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

        <div class="container wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
            <div class="row justify-content-center">
                <div style="background-color: #bbf2e2;" class="my-banner-title w-100 text-center"><span>Ôn thi Đại
                        học</span></div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a href="#" class="d-flex justify-content-center">
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
                    <a href="#" class="d-flex justify-content-center">
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
                    <a href="#" class="d-flex justify-content-center">
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

        <div class="container wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
            <div class="row justify-content-center">
                <div style="background-color: #77d9bd;" class="my-banner-title w-100 text-center"><span>Tiếng Anh Chuyên
                        Nghành</span></div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <a href="#" class="d-flex justify-content-center">
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
                    <a href="#" class="d-flex justify-content-center">
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
                    <a href="#" class="d-flex justify-content-center">
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
                    <a href="#" class="d-flex justify-content-center">
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
<section class="popular_courses" style="background: url({{ asset("dist/img/main_banner.jpg")}}) center center/cover">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title wow fadeInLeftBig" data-wow-duration=".2" data-wow-delay=".2s">
                    <h2 class="mb-3 pt-5" style="color: #fff">Đề Thi Mới Nhất</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($form as $i)
            <div class="col-sm-6 pt-1 wow fadeInUpBig" data-wow-duration=".2" data-wow-delay=".2.5s">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-lg">{{ $i->title }}</h5>
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Số câu: 40 câu</p>
                            </div>
                            <div class="col-sm-6">
                                <p>Thời gian: 60 phút</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <a href="{{ route('test', $i->id) }}" class="my-btn">Bắt đầu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>




<div class="popular_courses">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title wow fadeInLeftBig" data-wow-duration=".2" data-wow-delay=".2s">
                    <h2 class="m-3">Mẹo và tin tức</h2>
                </div>
            </div>
        </div>
        <!-- single course -->
        <div class="col-lg-12">
            <div class="owl-carousel active_course">
                @foreach($blog as $item)
                <div class="single_course">
                    <div class="course_head wow zoomIn" data-wow-duration=".2" data-wow-delay=".2.5s">
                        <img class="img-fluid" src="{{Storage::url('upload/img/blog/'.$item->avatar)}}" alt=""
                            style="height:300px" />
                    </div>
                    <div class="course_content">
                        <h4 class="mb-3 "><a class="card-title"
                                href="{{asset('tin-tuc'.'/'.$item->slug)}}">{{ $item->title }}</a></h4>
                        <p>{!! $item->summary !!}</p>
                        <div
                            class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                            <div class="mt-lg-0 mt-3">
                                <span class="meta_info mr-4">
                                    <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                </span>
                                <span class="meta_info"><a href="#"> <i class="ti-heart mr-2"></i>35
                                    </a></span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


<section style="padding-top:0; padding-bottom:20px" class="feature_area section_gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title wow fadeInLeftBig" data-wow-duration=".2" data-wow-delay=".2s">
                    <h2 class="mb-3">Liên hệ</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div style="background-color:#fff" class="single_feature text-center rounded wow zoomIn" data-wow-duration=".2" data-wow-delay=".2.5s">
                    <div class="icon">
                        <span>
                            <img src="{{ asset('dist/img/social/facebook.png') }}" width="15%" height="15%">
                            <a style="color:#2d142c" href="#">Facebook</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div style="background-color:#fff" class="single_feature text-center rounded wow zoomIn" data-wow-duration=".2" data-wow-delay=".2.5s">
                    <div class="icon">
                        <span>
                            <img src="{{ asset('dist/img/social/instagram.png') }}" width="15%" height="15%">
                            <a style="color:#2d142c" href="#">Instagram</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div style="background-color:#fff" class="single_feature text-center rounded wow zoomIn" data-wow-duration=".2" data-wow-delay=".2.5s">
                    <div class="icon">
                        <span>
                            <img src="{{ asset('dist/img/social/telephone.png') }}" width="15%" height="15%">
                            <a style="color:#2d142c" href="#">Email</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-section-center">
    <div class="container wow zoomIn" data-wow-duration=".2" data-wow-delay=".2s">
        <img src="{{ asset('dist/img/docs/text-1.jpeg') }}" width="100%" height="100%">
    </div>
</section>

<section class="my-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                    <h2 class="mb-3 wow fadeInLeft" data-wow-duration=".2" data-wow-delay=".2s">Học viên ưu tú</h2>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            @foreach($student as $item)
            <div class="col-sm-4 p-4 wow zoomInDown" data-wow-duration=".2" data-wow-delay=".2.5s">
                <div class="card-1">
                    <img src="{{ Storage::url('/upload/img/student/'.$item->avatar) }}" alt="" />
                    <div class="descriptions">
                        <h3 class="title text-danger">{{$item->name}}</h3>
                        <p class=" text-center">
                            {!!$item->content!!}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<section class="my-section-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title wow fadeInLeftBig" data-wow-duration=".2" data-wow-delay=".2s">
                    <h2 class="mb-3">Giới thiệu</h2>
                </div>
            </div>
        </div>
        <div class="row mb-5 wow" data-wow-duration=".2" data-wow-delay=".2s">
            <h4><i class="fas fa-arrow-alt-circle-right"></i> Nếu bạn đã quá chán nản vì học tiếng Anh, đã thử nhiều
                phương pháp, tốn rất nhiều tiền rồi mà không dùng được <br>
                Bạn đã học nhiều chứng chỉ nhưng trình độ Tiếng Anh vẫn không
                cải thiện <br>
                Bạn cần gấp TOEIC + khả năng giao tiếp Tiếng Anh để nhảy
                việc sau Tết?</h4>
        </div>
    </div>
</section>
{{-- 
<section class="my-section-center">
    <div class="container">


        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Chào mừng bạn đến với Tiếng Anh Mỗi Ngày
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="https://i1.wp.com/ritajms.com/wp-content/uploads/2019/11/52351011-english-british-england-language-education-concept.jpg"
                            height="340px" alt="">
                        <h4>Cùng tôi học thật tốt tiếng anh mỗi ngày</h4>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    swal("Welcome to SWAL","Is'nt this pretty!!");
</script> --}}