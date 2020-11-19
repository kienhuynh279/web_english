<header>
    <nav class="navbar navbar-expand-lg navbar-dark d-lg-flex d-none" style="height: 30px; background-color: #c47e2e;">
        <div class="container">
            <span class="text-light navbar-nav font-weight-light" style="color: rgba(255,255,255,.8) !important;"> {{ date('\N\g\à\y d \T\h\á\n\g m \N\ă\m Y') }}</span>

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
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff1e0">
        <div class="container">
            <a class="navbar-brand" href="/">
                <h2 class="py-0 mb-0 font-weight-medium"><img src="{{-- asset('image/src/Logo.png') --}}http://tienganhmoingay.com.vn/storage//upload/img/banner/logo_new.png" alt="Logo" height="60px"></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarHeader">
                <ul class="navbar-nav flex-grow-1 mx-auto">
                    <li class="w-50 mx-auto">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    @if (!Auth::check())
                    <li class="btn btn-light login-item mr-2" style="background-color: #c47e2e;">
                        <a href="{{ route('login') }}" style="color: #fff;"><i class=" fas fa-sign-in-alt pr-2"></i> Đăng nhập</a>
                    </li>
                    <li class="btn btn-light login-item" style="background-color: #c47e2e;">
                        <a href="{{ route('register') }}" style="color: #fff;"><i class=" fas fa-user-plus pr-2"></i> Đăng ký</a>
                    </li>
                    @else
                    <li class="dropdown">
                        <span class="d-flex ouline-none text-light justify-content-center align-items-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <a href="#">
                                <img width="25px" src="{{Storage::url('upload/img/user/'.Auth::user()->avatar)}}" onerror="this.src='{{Storage::url('upload/img/user/male.jpg')}}'" class="img-circle elevation-2 rounded mr-2">
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
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light" style="z-index: 10; background-color: white; border-top: #ff000073 solid 2px; box-shadow: 0px 6px 15px -15px;">
        <div class="container">
            <ul class="menu-item navbar-nav mr-auto">
                <li class=" nav-item nav-item-active">
                    <a class="nav-link" href="/">Trang chủ</a>
                </li>
                @if(!empty($postcats))
                @foreach($postcats as $cats)
                <li class="nav-item nav-item-active">
                    @if($cats->status == 1)
                    @if($cats->vi_tri == 0)
                    {{-- <li><a href="#" class="nav-link">{{$cats->title}}</a></li> --}}
                @if($cats->id==37)
                <a href="javascrip:void(0)">
                    {{$cats->title}}
                </a>
                @else
                <a href="#" class="nav-link">
                    {{$cats->title}}
                </a>
                @endif
                @endif
                <ul class="menu-sub">
                    @foreach($postcats as $child)
                    @if($cats->id == $child->vi_tri)
                    <li>
                        <a href="#">

                            {{$child->title}}
                        </a>
                        @endif
                        <ul class="menu-sub">
                            @foreach( $postcats as $child2)
                            @if($child->id == $child2->vi_tri)
                            <li>
                                {{-- {{asset('danhmuc/'.$cats->id.'/'.$cats->slug.'/'.$child->slug.'/'.$child2->slug.'.html')}} --}}
                                <a href="{{asset($cats->slug.'/'.$child->slug.'/'.$child2->slug)}}">

                                    {{$child2->title}}
                                </a>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                </ul>
                </li>
                @endif
                @endforeach
                @endif
            </ul>
            <ul class="menu-item navbar-nav ml-auto">
                <li class="nav-item nav-item-active">
                    <a class="nav-link" href="/tin-tuc">Tin tức</a>
                </li>
                <li class="nav-item nav-item-active">
                    <a class="nav-link" href="/lien-he">Liên Hệ</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
