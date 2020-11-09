<div class="header_area">
    <div class="main_menu" id="navbar">
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between" method="" action="">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here" />
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search . . ."></span>
                </form>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a style="font-weight: bold; color:   #fdc632" class="navbar-brand logo_h" href="{{ route('home') }}">
                    {{-- <img src="{{ asset('dist/img/logo_new.png') }}" weight="60px" height="60px"> --}}
                    @if(!empty($banner))
                        @foreach($banner as $item )
                            @if($item->status == 1)
                                @if($item->id == 106)
                                    <img src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}" weight="60px" height="60px" alt="">
                                @endif
                            @endif
                        @endforeach
                    @endif
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    
                    <ul class="menu-hover clearfix">
                        @if(!empty($postcats))
                            @foreach($postcats as $cats)
                                <li>
                                    @if($cats->status == 1)
                                        @if($cats->vi_tri == 0)
                                            {{-- <li><a href="#" class="nav-link">{{$cats->title}}</a></li> --}}
                                            <a href="#">{{$cats->title}}</a>
                                        @endif  
                                    <ul class="menu-sub">
                                        @foreach($postcats as $child)
                                            @if($cats->id == $child->vi_tri)
                                                <li><a href="#">{{$child->title}}</a>
                                            @endif
                                                <ul class="menu-sub">
                                                    @foreach($postcats as $child2)
                                                        @if($child->id == $child2->vi_tri)
                                                            <li><a href="#">{{$child2->title}}</a> </li>
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
                        {{-- <li><a href="{{ route('home') }}" class="nav-link">Trang chủ</a> </li>
                        <li>
                            <a href="#">Ôn thi</a>
                            <ul class="menu-sub">
                                <li><a href="{{ route('courseList') }}">Ôn thi chứng chỉ</a>
                                    <ul class="menu-sub">
                                        <li><a href="{{ route('courseList') }}">KET</a> </li>
                                        <li><a href="{{ route('courseList') }}">PET</a> </li>
                                        <li><a href="{{ route('courseList') }}">TOEIC</a> </li>
                                        <li><a href="{{ route('courseList') }}">IELTS</a> </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('courseList') }}">Ôn thi vào lớp 10</a>
                                    <ul class="menu-sub">
                                        <li><a href="{{ route('course') }}">Luyện đề thi</a> </li>
                                        <li><a href="{{ route('course') }}">Luyện theo dạng đề</a> </li>
                                        <li><a href="{{ route('course') }}">Luyện theo chuyên đề</a> </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('courseList') }}">Ôn thi THPT</a>
                                    <ul class="menu-sub">
                                        <li><a href="{{ route('course') }}">Luyện đề thi</a> </li>
                                        <li><a href="{{ route('course') }}">Luyện theo dạng đề</a> </li>
                                        <li><a href="{{ route('course') }}">Luyện theo chuyên đề</a> </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('courseList') }}">Ôn thi ĐH</a>
                                    <ul class="menu-sub">
                                        <li><a href="{{ route('course') }}">Luyện đề thi</a> </li>
                                        <li><a href="{{ route('course') }}">Luyện theo dạng đề</a> </li>
                                        <li><a href="{{ route('course') }}">Luyện theo chuyên đề</a> </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('courseList') }}">Tiếng anh chuyên ngành</a>
                                    <ul class="menu-sub">
                                        <li><a href="{{ route('course') }}">Điện lạnh</a> </li>
                                        <li><a href="{{ route('course') }}">Điện công nghiệp & dân dụng</a> </li>
                                        <li><a href="{{ route('course') }}">Thư tín thương mại</a> </li>
                                        <li><a href="{{ route('course') }}">Nhà hàng khách sạn</a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('news') }}">Tin tức</a> </li>
                        <li><a href="{{ route('contact') }}">Liên hệ</a> </li> --}}
                        {{-- <li><a href="{{ route('login') }}">Đăng nhập</a> </li>
                        --}}
                        <li>
                            <a href="#" id="search">
                                <i class="ti-search"></i>
                            </a>
                        </li>
                        <li>
                            @if (!Auth::check())
                                <li class="login-item">
                                    <a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a>
                                </li>
                                <li class="login-item">
                                    <a href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Đăng ký</a>
                                </li>
                            @else
                                <li class="dropdown">
                                    <span
                                        class="d-flex ouline-none text-light justify-content-center align-items-center"
                                        type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        {{-- <a data-toggle="dropdown" href="#"
                                            aria-expanded="false"> --}}
                                            {{-- <img width="20px" src="{{Storage::url('upload/img/user/'.Auth::user()->avatar)}}" class="img-circle elevation-2" alt="User Image"> --}}
                                            {{-- </a> --}}
                                        <span class="font-weight-bold">&nbsp; {{ Auth::user()['username'] }}</span>
                                    </span>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href="{{ route('logout') }}"
                                            class="dropdown-item dropdown-footer text-danger">
                                            <i class="fas fa-sign-out-alt mr-2"></i>
                                            Đăng Xuất
                                        </a>
                                    </div>
                                </li>
                            @endif
                        </li>
                      
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
