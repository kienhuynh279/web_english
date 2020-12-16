<div class="container" style="padding-top: 90px">
    <nav aria-label="breadcrumb" style="background: none">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li class="breadcrumb-item"><a href="javascrip:void(0)">Ôn thi</a></li>
            <li class="breadcrumb-item"><a href="{{ route('course') }}">{{ $data['brum']->title }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $data['postcat']->title }}</li>
        </ol>
    </nav>
</div>
{{-- 
    <div>
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
    @if (!empty($banner))
    @foreach ($banner as $item)
    @if ($item->status == 1)
    @if ($item->id == 109)
    <img src="{{ Storage::url('/upload/img/banner/' . $item->avatar) }}" width="100%" height="100%" alt="">
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
    <img src="{{ Storage::url('/upload/img/banner/' . $item->avatar) }}" width="100%" height="100%" alt="">
    @endif
    @endif
    @endforeach
    @endif
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
            <a href="{{route('redirect',['facebook'])}}">
                <span class="social-share-text">Login with Facebook</span>
            </a>
        </div>
        <div class="social-share-item facebook" class="btn btn-block btn-danger">
            <i class="ti-google social-share-icon"></i>
            <a href="{{route('redirectgg')}}">
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
</div> --}}


<section class="my-section-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <h2 class="my-title">{{ $data['postcat']->title }}</h2>
            </div>
        </div>

        <div class="row">
            @foreach($data['form'] as $item)
            @if(substr($item->id_theforms_cat,3,2) == $data['postcat']->id)
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header bg-white">
                        <div class="media">
                            {{-- <div class="media-left media-middle">
                            <a href="">
                                <img src="{{ Storage::url('/upload/img/the_form/'.$item->avatar) }}"
                            alt="Card image cap" width="100" class="rounded">
                            </a>
                        </div> --}}
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
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <p>{{$data['form']->links()}}</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!--================ Start Registration Area =================-->
<div class="section_gap registration_area" style="background: url({{ asset("dist/img/bc_charts.jpg")}})">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="row clock_sec clockdiv chart" id="clockdiv">
                    <div class="col-lg-12">
                        <h2 class="mb-3 text-center">Thành tích cá nhân</h1>

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
                <h2 class="text-center mb-3">Bảng xếp hạng</h2>

                <div class="recent-item">
                    <img src="https://scontent.fsgn5-1.fna.fbcdn.net/v/t1.0-9/119450595_1453844138142212_3986977393684187827_n.jpg?_nc_cat=103&ccb=2&_nc_sid=09cbfe&_nc_ohc=W8LrmhPxXJcAX87mYG4&_nc_ht=scontent.fsgn5-1.fna&oh=111d66a3c00f5e49dcc8698745a72359&oe=5FFCC97F"
                        alt="" class="recent-image" />
                    <div class="recent-info">
                        <h3 class="recent-author">Nguyễn Văn A</h3>
                    </div>
                    <div class="recent-meta">
                        <span class="recent-change increase">Hạng 1</span>

                    </div>
                </div>
                <div class="recent-item">
                    <img src="https://scontent.fsgn5-1.fna.fbcdn.net/v/t1.0-9/119450595_1453844138142212_3986977393684187827_n.jpg?_nc_cat=103&ccb=2&_nc_sid=09cbfe&_nc_ohc=W8LrmhPxXJcAX87mYG4&_nc_ht=scontent.fsgn5-1.fna&oh=111d66a3c00f5e49dcc8698745a72359&oe=5FFCC97F"
                        alt="" class="recent-image" />
                    <div class="recent-info">
                        <h3 class="recent-author">Nguyễn Văn B</h3>

                    </div>
                    <div class="recent-meta">
                        <span class="recent-change increase">Hạng 2</span>

                    </div>
                </div>
                <div class="recent-item">
                    <img src="https://scontent.fsgn5-1.fna.fbcdn.net/v/t1.0-9/119450595_1453844138142212_3986977393684187827_n.jpg?_nc_cat=103&ccb=2&_nc_sid=09cbfe&_nc_ohc=W8LrmhPxXJcAX87mYG4&_nc_ht=scontent.fsgn5-1.fna&oh=111d66a3c00f5e49dcc8698745a72359&oe=5FFCC97F"
                        alt="" class="recent-image" />
                    <div class="recent-info">
                        <h3 class="recent-author">Nguyễn Văn C</h3>

                    </div>
                    <div class="recent-meta">
                        <span class="recent-change increase">Hạng 3</span>

                    </div>
                </div>
                <div class="recent-item">
                    <img src="https://scontent.fsgn5-1.fna.fbcdn.net/v/t1.0-9/119450595_1453844138142212_3986977393684187827_n.jpg?_nc_cat=103&ccb=2&_nc_sid=09cbfe&_nc_ohc=W8LrmhPxXJcAX87mYG4&_nc_ht=scontent.fsgn5-1.fna&oh=111d66a3c00f5e49dcc8698745a72359&oe=5FFCC97F"
                        alt="" class="recent-image" />
                    <div class="recent-info">
                        <h3 class="recent-author">Nguyễn Văn D</h3>

                    </div>
                    <div class="recent-meta">
                        <span class="recent-change increase">Hạng 4</span>

                    </div>
                </div>
                <div class="recent-item">
                    <img src="https://scontent.fsgn5-1.fna.fbcdn.net/v/t1.0-9/119450595_1453844138142212_3986977393684187827_n.jpg?_nc_cat=103&ccb=2&_nc_sid=09cbfe&_nc_ohc=W8LrmhPxXJcAX87mYG4&_nc_ht=scontent.fsgn5-1.fna&oh=111d66a3c00f5e49dcc8698745a72359&oe=5FFCC97F"
                        alt="" class="recent-image" />
                    <div class="recent-info">
                        <h3 class="recent-author">Nguyễn Văn E</h3>
                    </div>
                    <div class="recent-meta">
                        <span class="recent-change increase">Hạng 5</span>

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
                        <button disabled class="download-form-submit bg-secondary"
                            style="background-color: #b0ada7 !important;">Tải về</button>
                    </a>
                    @endif
                </div>
            </div>
            <br>
            <br>
        </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-5"></div>
        <div class="col-2 text-center">
            <p>{{$data['post']->links()}}</p>
        </div>
    </div>

    <div class="row">
        {{-- Comment Document --}}
        <div class="fb-comments" data-href="http://127.0.0.1:8000/on-thi/on-thi-chung-chi/ket" data-numposts="5"
            data-width=""></div>
    </div>
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