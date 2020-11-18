<div class="header_area">
    <div class="main_menu" id="navbar">
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between" method="" action="">
                    <input type="text" class="form-control" id="search_input" placeholder="Nhập nội dung cần tìm" />
                    <button type="submit" class="btn"></button>
                    <span class="ti-close my-auto" id="close_search" title="Đóng"></span>
                </form>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a style="font-weight: bold; color:   #fdc632" class="navbar-brand logo_h" href="{{route('home') }}">
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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                                    <a href="{{asset($cats->slug)}}">
                                        <img src="{{Storage::url('/upload/img/postcats/'.$cats->avatar)}}" weight="20px" height="20px" alt="">
                                        {{$cats->title}}
                                    </a>
                                @endif
                            <ul class="menu-sub">
                                @foreach($postcats as $child)
                                @if($cats->id == $child->vi_tri)
                                <li>
                                    <a href="#">
                                        <img src="{{Storage::url('/upload/img/postcats/'.$child->avatar)}}" weight="20px" height="20px" alt="">
                                        {{$child->title}}
                                    </a>
                                    @endif
                                    <ul class="menu-sub">
                                        @foreach( $postcats as $child2)
                                        @if($child->id == $child2->vi_tri)
                                        <li>
                                            {{-- {{asset('danhmuc/'.$cats->id.'/'.$cats->slug.'/'.$child->slug.'/'.$child2->slug.'.html')}} --}}
                                            <a href="{{asset($cats->slug.'/'.$child->slug.'/'.$child2->slug)}}">
                                                <img src="{{Storage::url('/upload/img/postcats/'.$child2->avatar)}}" weight="20px" height="20px" alt="">
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
                        <li>
                            <a href="#" id="search">
                                <i class="ti-search"></i>
                            </a>
                        </li>
                        {{-- <li> --}}
                        @if (!Auth::check())
                        <li class="login-item">
                            <a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a>
                        </li>
                        <li class="login-item">
                            <a href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Đăng ký</a>
                        </li>
                        @else
                        <li class="dropdown">
                            <span class="d-flex ouline-none text-light justify-content-center align-items-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <a href="#">
                                    <img width="20px" src="{{Storage::url('upload/img/user/'.Auth::user()->avatar)}}" onerror="this.src='{{Storage::url('upload/img/user/male.jpg')}}'" class="img-circle elevation-2 default-img">
                                    <span class="font-weight-bold">{{ Auth::user()['username'] }}</span>
                                </a>
                            </span>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="{{ route('logout') }}" class="dropdown-item dropdown-footer text-danger">
                                    <i class="fas fa-sign-out-alt mr-2"></i> Đăng Xuất
                                </a>
                            </div>
                        </li>
                        @endif
                        {{-- </li> --}}

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
