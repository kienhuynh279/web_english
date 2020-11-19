<section class="my-section">
    <div class="container">
        <div class="col-sm-12">
            <div class="row">
                {{-- <a href="#">
                    <p style="color:black">Trang chủ \ {{ $cateName->title }}</p>
                </a> --}}
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
                                            <img src="{{ Storage::url('/upload/img/banner/' . $item->avatar) }}"
                                                width="100%" height="100%" alt="">
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
                                            <img src="{{ Storage::url('/upload/img/banner/' . $item->avatar) }}"
                                                width="100%" height="100%" alt="">
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
                                            <img src="{{ Storage::url('/upload/img/banner/' . $item->avatar) }}"
                                                width="100%" height="100%" alt="">
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
                        <span class="social-share-text">Login with Facebook</span>
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
                <a href="{{ route('course') }}" class="btn-arrow"><div class="arrow"></div>Xem thêm</a>
            </div>
        </div>
        <div class="row">
        @foreach($data['form'] as $item)
        {{-- @foreach($data['formcat'] as $i)
            @if(substr($item->id_theforms_cat,2,1) == $i->id) --}}
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header bg-white">
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="">
                                    <img src="{{ Storage::url('/upload/img/the_form/'.$item->avatar) }}" alt="Card image cap" width="100" class="rounded"> 
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
            {{-- @endif
        @endforeach --}}
        @endforeach
        </div>
    <div>
</div>
</div>
</section>

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
                                    <button  class="download-form-submit">Tải về</button> 
                                </a>
                            @else
                            <a class="" href="">
                                <button disabled class="download-form-submit">Tải về</button> 
                            </a>
                            @endif
                            <span class="meta_info"><i style="color: red; padding-top: 17px" class="ti-share float-xl-right"></i></span>
                        </div>
                    </div>
                </div>
                @endforeach
           
        </div>
</section>
    <!-- Không cho copy hình -->
    <script type="text/javascript" src="https://sites.google.com/site/bituotblog/disable-copy.js"></script>
    <style>
    {
    -moz-user-select: none !important;
    -webkit-touch-callout: none!important;
    -webkit-user-select: none!important;
    -khtml-user-select: none!important;
    -moz-user-select: none!important;
    -ms-user-select: none!important;
    user-select: none!important;
    }
    </style> 
    <script type="text/JavaScript">
        var message="NoRightClicking"; function defeatIE() {if (document.all)
        {(message);return false;}} function defeatNS(e) {if (document.layers||(document.getElementById&&!document.all)) { if (e.which==2||e.which==3) 
        {(message);return false;}}} if (document.layers) {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=defeatNS;} 
        else{document.onmouseup=defeatNS;document.oncontextmenu=defeatIE;} document.oncontextmenu=new Function("return false")
    </script>     

