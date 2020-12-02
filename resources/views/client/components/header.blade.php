<header>
    {{-- <nav class="navbar navbar-expand-lg navbar-dark d-lg-flex d-none" style="height: 30px; background-color: #c47e2e;">
        <div class="container">
            <span class="text-light navbar-nav font-weight-light" style="color: rgba(255,255,255,.8) !important;">
                {{ date('\N\g\à\y d \T\h\á\n\g m \N\ă\m Y') }}</span>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="#"><i style="color: white;" class="fab fa-facebook-square"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i style="color: white;" class="fab fa-instagram"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i style="color: white;" class="fab fa-twitter"></i></a>
        </li>
    </ul>
    </div>
    </nav> --}}
    {{-- <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff1e0">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarHeader">
                {{-- <ul class="navbar-nav flex-grow-1 mx-auto">
                    <li class="w-50 mx-auto">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </li>
                </ul> --}}

    {{-- </div>
        </div>
    </nav> --}}
    <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here" />
                <button type="submit" class="btn"></button>
                <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light"
        style="z-index: 10; background-color: white; border-top: #e44434 solid 2px; box-shadow: 0px 6px 15px -15px;">
        <div id="block-menu" class="container">
            <a class="navbar-brand" href="/">
                <h2 class="py-0 mb-0 font-weight-medium"><img
                        src="http://tienganhmoingay.com.vn/storage//upload/img/banner/logo_new.png" alt="Logo"
                        height="60px"></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span> <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="overlay-mobile"></div>
           
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="menu-hover clearfix navbar-nav menu-item navbar-nav mr-auto">
                    <li class="nav-item nav-item-active">
                        <a class="nav-link" href="/">Trang Chủ</a>
                    </li>
                    <li class=" nav-item nav-item-active">
                        <a class="nav-link" href="javvascrip:void(0)">Ôn Thi</a>
                        <ul class="menu-sub">
                            @foreach($postcats as $cats)
                            @if($cats->vi_tri == 0)
                            <li>
                                <a href="#">{{$cats->title}}</a>
                                @endif
                                <ul class="menu-sub">
                                    @foreach( $postcats as $child2)
                                    @if($cats->id == $child2->vi_tri)
                                    <li>
                                        <a
                                            href="{{asset('on-thi'.'/'.$cats->slug.'/'.$child2->slug)}}">{{$child2->title}}</a>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </li>

                            @endforeach
                        </ul>
                    </li>

                    <li class="nav-item nav-item-active">
                        <a style="color: #e44434" class="nav-link" href="/tin-tuc">Tin tức</a>
                    </li>
                    <li class="nav-item nav-item-active">
                        <a class="nav-link" href="/lien-he">Liên Hệ</a>
                    </li>


                    <li class="nav-item nav-item-active">
                        <a class="nav-link" href="/tin-tuc">Tin tức</a>
                    </li>
                    <li class="nav-item nav-item-active">
                        <a class="nav-link" href="/lien-he">Liên Hệ</a>
                    </li>
                {{-- </ul> --}}


             
                {{-- <ul class="navbar-nav ml-auto"> --}}
                    @if (!Auth::check())

                    <li class="btn btn-light login-item mr-2 btn-login" >
                        <a href="{{ route('login') }}"><i class="fas fa-sign-in-alt pr-2"></i>
                            Đăng nhập</a>
                    </li>


                    <li class="btn btn-light login-item btn-login" >
                        <a href="{{ route('register') }}"><i class="fas fa-user-plus pr-2"></i>
                            Đăng ký</a>
                    </li>
                    @else
                    <li class="dropdown">
                        <span class="d-flex ouline-none text-light justify-content-center align-items-center"
                            type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <a href="#">
                                <img width="25px" src="{{Storage::url('upload/img/user/'.Auth::user()->avatar)}}"
                                    onerror="this.src='{{Storage::url('upload/img/user/male.jpg')}}'"
                                    class="img-circle elevation-2 rounded mr-2">
                                <span class="text-success font-weight-bold">{{ Auth::user()['username'] }}</span>
                            </a>
                        </span>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a href="{{ route('logout') }}" class="dropdown-item dropdown-footer">
                                <i class="fas fa-sign-out-alt mr-2 text-danger"></i> Đăng Xuất
                            </a>
                        </div>
                    </li>
                    @endif
                    <li class="nav-item text-center">
                        <a href="#" class="nav-link search" id="search">
                            <i class="ti-search"></i>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>

<script>
    var isActive = false;
    function mobileActive() {
        let item = document.querySelector(".overlay-mobile");
        isActive = !isActive;
        if(isActive) {
            item.classList.add("active");
        }
        else {
            item.classList.remove("active");
        }
    }
    // active, un-active overlay
    document.querySelector(".navbar-toggler").addEventListener("click", () => {
        mobileActive();
    })
    // click outside
    document.querySelector("#block-menu").addEventListener("click", (e) => {
        if((e.target.classList.contains("overlay-mobile")) || (e.target.getAttribute("id") === "search" && window.innerWidth < 991)) {
            document.querySelector(".navbar-toggler").click();
        }
    })
</script>