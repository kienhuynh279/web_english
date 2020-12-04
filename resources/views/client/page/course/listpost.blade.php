<section class="my-section">
    <div class="container">
        <div class="col-sm-12">
            <div class="row">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            {{-- <img src="{{ asset('dist/img/banner/banner-2.jpg') }}"
                            alt="" width="100%" height="100%"> --}}
                            @if (!empty($banner))
                            @foreach ($banner as $item)
                            @if ($item->status == 1)
                            @if ($item->id == 108)
                            <img src="{{ Storage::url('/upload/img/banner/' . $item->avatar) }}" width="100%"
                                height="100%" alt="">
                            @endif
                            @endif
                            @endforeach
                            @endif
                        </div>
                        <div class="carousel-item">
                            {{-- <img src="{{ asset('dist/img/banner/banner-2.jpg') }}"
                            alt="" width="100%" height="100%"> --}}
                            @if (!empty($banner))
                            @foreach ($banner as $item)
                            @if ($item->status == 1)
                            @if ($item->id == 109)
                            <img src="{{ Storage::url('/upload/img/banner/' . $item->avatar) }}" width="100%"
                                height="100%" alt="">
                            @endif
                            @endif
                            @endforeach
                            @endif
                        </div>
                        <div class="carousel-item">
                            @if (!empty($banner))
                            @foreach ($banner as $item)
                            @if ($item->status == 1)
                            @if ($item->id == 110)
                            <img src="{{ Storage::url('/upload/img/banner/' . $item->avatar) }}" width="100%"
                                height="100%" alt="">
                            @endif
                            @endif
                            @endforeach
                            @endif
                            {{-- <img src="{{ asset('dist/img/banner/banner-2.jpg') }}"
                            alt="" width="100%" height="100%"> --}}
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
            @if (!Auth::check())
            <div class="col-sm-4">
                <h2 class="main_title">Login</h2>
                <form action="/action_page.php">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Username" id="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" id="pwd">
                    </div>

                    <label>
                        <input type="checkbox"> Remember
                    </label>
                    <button type="submit" class="btn-register">Login</button>
                </form>
                <div class="social-share">
                    <div class="social-share-item facebook">
                        <i class="ti-facebook social-share-icon"></i>
                        <a href="{{route('redirect',['facebook'])}}" >
                            <span class="social-share-text">Login with Facebook</span>
                        </a>
                        {{-- <a href="{{route('redirect',['facebook'])}}" class="btn btn-block btn-primary">
                            <i class="fab fa-facebook mr-2"></i> Đăng nhập bằng Facebook
                          </a>
                          <a href="{{route('redirectgg')}}" class="btn btn-block btn-danger">
                            <i class="fab fa-google-plus mr-2"></i> Đăng nhập bằng Google+
                          </a> --}}
                    </div>
                    <div class="social-share-item facebook">
                        <i class="ti-google social-share-icon"></i>
                        <a href="{{route('redirectgg')}}" >
                            <span class="social-share-text">Login with Google</span>
                        </a>
                    </div>
                </div>
            </div>
            @else
            <div class="col-sm-4">
                <h1 class="text-center">Thông tin thanh toán</h1>
            </div>
            @endif

        </div>
    </div>
</section>

<section class="my-section-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <h2 class="my-title">Luyện Theo Dạng Bài</h2>
            </div>
            <div class="col-sm-2">
                <a href="{{ route('course') }}" class="btn-arrow">
                    <div class="arrow"></div>Xem thêm
                </a>
            </div>
        </div>
        <div class="row">
            @foreach($data['form'] as $item)
            @if(substr($item->id_theforms_cat,3,2) == $data['postcat']->id)
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header bg-white">
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="">
                                    <img src="{{ Storage::url('/upload/img/the_form/'.$item->avatar) }}"
                                        alt="Card image cap" width="100" class="rounded">
                                </a>
                            </div>
                            <div class="media-body media-middle">
                                <h4 class="card-title"><a href="instructor-course-edit.html">{{ $item->title }}</a></h4>
                            </div>
                            <div class="media-right media-middle">
                                <a href="{{ route('test', $item->id) }}" class="btn btn-sm btn-white">Làm bài</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        <div>
        </div>
    </div>
</section>

<!--================ Start Registration Area =================-->
<div class="section_gap registration_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="row clock_sec clockdiv" id="clockdiv">
                    <div class="col-lg-12">
                        <h2 style="color:#2d142c " class="mb-3">Thành tích cá nhân</h1>
                            <p style="color:#2d142c">
                                "If you talk to a man in a language he understands, that goes to his head.
                                If you talk to him in his language, that goes to his heart"
                            </p>
                    </div>
                    <div class="col clockinner ">
                        <span style='color:#2d142c' class="smalltext">Truy cập</span>
                        <h1 style='color:#2d142c' class="amount">10</h1>

                    </div>
                    <div class="col clockinner">
                        <span style='color:#2d142c' class="smalltext">Bài tập</span>
                        <h1 style='color:#2d142c' class="amount">05</h1>

                    </div>
                    <div class="col clockinner ">
                        <span style='color:#2d142c' class="smalltext">Hoàn Thành</span>
                        <h1 style='color:#2d142c' class="amount">70%</h1>

                    </div>
                    <div class="col clockinner">

                        <span style='color:#2d142c' class="smalltext">Xếp hạng</span>
                        <h1 style='color:#2d142c' class="amount">20</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <h2 style="color: #2d142c;text-align:center;">Bảng xếp hạng</h2>
                <br>
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#week">Tuần</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#month">Tháng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#year">Năm</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="week" class="container tab-pane active"><br>
                        <table id="example" class="table table-hover table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Hạng</th>
                                    <th>Họ tên</th>
                                    <th>Thành tích</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div id="month" class="container tab-pane fade"><br>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">

                        </table>
                    </div>
                    <div id="year" class="container tab-pane fade"><br>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<!--================ End Registration Area =================-->

<section class="my-section-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <h3 class="my-title">Tài Liệu </h3>
            </div>
            <div class="col-sm-2">
                <a href="{{ route('course') }}" class="btn-arrow">
                    <div class="arrow"></div>Xem thêm
                </a>
            </div>
        </div>
        <div class="row">
            @foreach($data['post'] as $item)
            <div class="col-sm-4">
                <div class="simple-card">
                    <a href="#">
                        <div class="simple-card-image">
                            <img src="{{ Storage::url('/upload/img/posts/'.$item->avatar) }}" alt="" />
                        </div>
                        <div class="simple-card-content">
                            <h3 class="simple-card-title">{{ $item->title }}</h3>
                    </a>
                    <p class="simple-card-desc">{!! $item->summary !!}</p>
                    @if($item->dowload == 1)
                    <a class="" href="">
                        <button class="download-form-submit">Tải về</button>
                    </a>
                    @else
                    <a class="" href="">
                        <button disabled class="download-form-submit">Tải về</button>
                    </a>
                    @endif
                </div>

            </div>
            <br>
            <br>
        </div>
        @endforeach
      
        {{-- Comment Document --}}
        <div class="fb-comments" data-href="http://127.0.0.1:8000/on-thi/on-thi-chung-chi/ket" data-numposts="5" data-width=""></div>

    </div>
</section>
<!-- Không cho copy hình -->
<script type="text/javascript" src="https://sites.google.com/site/bituotblog/disable-copy.js"></script>
<style>
    {
        -moz-user-select: none !important;
        -webkit-touch-callout: none !important;
        -webkit-user-select: none !important;
        -khtml-user-select: none !important;
        -moz-user-select: none !important;
        -ms-user-select: none !important;
        user-select: none !important;
    }
</style>
<script type="text/JavaScript">
    var message="NoRightClicking"; function defeatIE() {if (document.all)
        {(message);return false;}} function defeatNS(e) {if (document.layers||(document.getElementById&&!document.all)) { if (e.which==2||e.which==3)
        {(message);return false;}}} if (document.layers) {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=defeatNS;}
        else{document.onmouseup=defeatNS;document.oncontextmenu=defeatIE;} document.oncontextmenu=new Function("return false")
        // Select all tabs
$('.nav-tabs a').click(function(){
  $(this).tab('show');
})

// Select tab by name
$('.nav-tabs a[href="#home"]').tab('show')

// Select first tab
$('.nav-tabs a:first').tab('show')

// Select last tab
$('.nav-tabs a:last').tab('show')

// Select fourth tab (zero-based)
$('.nav-tabs li:eq(3) a').tab('show')
    </script>