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
<<<<<<< HEAD
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a style="font-weight: bold; color:   #fdc632" class="navbar-brand logo_h" href="{{ route('home') }}">
              <img src="{{ asset('dist/img/logo_new.png') }}" weight="60px" height="60px">
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <?php 
                function activeMenu($uri = '') {
                  $active = '';
                  if (Request::segment(1) == $uri) {
                      $active = 'active';
                  }
                  return $active;
                }
              ?>
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item {{ activeMenu('') }}">
                  <a  class="nav-link"  href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item {{ activeMenu('tin-tuc') }}">
                  <a  class="nav-link "  href="{{ route('news') }}">Blogs</a>
                </li>
                <li class="nav-item {{ activeMenu('khoa-hoc') }}">
                  <a class="nav-link"  href="{{ route('courseList') }}">Docs</a>
                </li>
                <li class="nav-item {{ activeMenu('lien-he') }}">
                  <a class="nav-link"  href="{{ route('contact') }}">Contact</a>
                </li>
                {{-- <li class="nav-item {{ activeMenu('dang-nhap') }}">
                  <a class="nav-link"  href="{{ route('login') }}">User</a>
                </li> --}}
                <li class="nav-item">
                  <a href="#" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                  </a>
                </li>
                
                <ul class="topbar-items">
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
                            {{-- <a data-toggle="dropdown" href="#" aria-expanded="false"> --}}
                                 <img  src="{{asset('/storage/app/upload/img/user/'.Auth::user()->avatar)}}" class="img-circle" alt="User Image">
                            {{-- </a> --}}
                            <span class="font-weight-bold">&nbsp; {{ Auth::user()['username'] }}</span>
                       </span>
                       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a href="{{ route('logout') }}" class="dropdown-item dropdown-footer text-danger">
                                 <i class="fas fa-sign-out-alt mr-2"></i>
                                 Đăng Xuất
=======
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a style="font-weight: bold; color:   #fdc632" class="navbar-brand logo_h" href="{{ route('home') }}">
                    <img src="{{ asset('dist/img/logo_new.png') }}" weight="60px" height="60px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="icon-bar"></span> <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="menu-hover clearfix" >
                            <li ><a href="{{ route('home') }}" class="nav-link">Trang chủ</a> </li>
                            <li>
                                <a href="#">Ôn thi</a> 
                                <ul class="menu-sub" >
                                <li><a href="{{ route('courseList') }}">Ôn thi chứng chỉ</a>
                                    <ul class="menu-sub" >
                                        <li><a href="{{ route('courseList') }}" >KET</a> </li>
                                        <li><a href="{{ route('courseList') }}" >PET</a> </li>
                                        <li><a href="{{ route('courseList') }}" >TOEIC</a> </li>
                                        <li><a href="{{ route('courseList') }}" >IELTS</a> </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('courseList') }}" >Ôn thi vào lớp 10</a> 
                                    <ul class="menu-sub" >
                                        <li><a href="{{ route('course') }}" >Luyện đề thi</a> </li>
                                        <li><a href="{{ route('course') }}" >Luyện theo dạng đề</a> </li>
                                        <li><a href="{{ route('course') }}" >Luyện theo chuyên đề</a> </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('courseList') }}" >Ôn thi THPT</a> 
                                    <ul class="menu-sub" >
                                        <li><a href="{{ route('course') }}" >Luyện đề thi</a> </li>
                                        <li><a href="{{ route('course') }}" >Luyện theo dạng đề</a> </li>
                                        <li><a href="{{ route('course') }}" >Luyện theo chuyên đề</a> </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('courseList') }}" >Ôn thi ĐH</a> 
                                    <ul class="menu-sub" >
                                        <li><a href="{{ route('course') }}" >Luyện đề thi</a> </li>
                                        <li><a href="{{ route('course') }}" >Luyện theo dạng đề</a> </li>
                                        <li><a href="{{ route('course') }}" >Luyện theo chuyên đề</a> </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('courseList') }}" >Tiếng anh chuyên ngành</a> 
                                    <ul class="menu-sub" >
                                        <li><a href="{{ route('course') }}" >Điện lạnh</a> </li>
                                        <li><a href="{{ route('course') }}" >Điện công nghiệp & dân dụng</a> </li>
                                        <li><a href="{{ route('course') }}" >Thư tín thương mại</a> </li>
                                        <li><a href="{{ route('course') }}" >Nhà hàng khách sạn</a> </li>
                                    </ul>
                                </li>
                                </ul>
                            </li>
                            <li><a href="{{ route('news') }}" >Tin tức</a> </li>
                            <li><a href="{{ route('contact') }}" >Liên hệ</a> </li>
                            <li><a href="{{ route('login') }}" >Đăng nhập</a> </li>
                            <li>
                                <a href="#" id="search">
                                    <i class="ti-search"></i>
                                </a>
                            </li>
                </ul>

                    {{-- <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('home') }}">Trang Chủ</a>
                        </li>

                        <div class="dropdown">
                            <li class="nav-item dropdown-toggle" type="button" data-toggle="dropdown"><a class="nav-link">Ôn thi</a><span class="caret"></span></li>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a class="test" class="dropdown-item" href="#">Ôn thi chứng chỉ<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">KET</a></li>
                                        <li><a href="#">PET</a></li>
                                        <li><a href="#">TOEIC</a></li>
                                        <li><a href="#">IELTS</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="test" href="#">Ôn thi vào lớp 10<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Luyện đ</a></li>
                                        <li><a href="#">PET</a></li>
                                        <li><a href="#">TOEIC</a></li>
                                        <li><a href="#">IELTS</a></li>
                                    </ul>
                                </li>
                                <li><a tabindex="-1" href="#">Ôn thi chứng chỉ</a></li>
                                <li><a tabindex="-1" href="#">CSS</a></li>
                                <li class="dropdown-submenu">
                                    <a class="test" tabindex="-1" href="#">Ngôn ngữ lập trình <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="#">C#</a></li>
                                        <li><a tabindex="-1" href="#">PHP</a></li>
                                        <li class="dropdown-submenu">
                                            <a class="test" href="#">Ngôn ngữ khác <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Java</a></li>
                                                <li><a href="#">Python</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                         <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                              Ôn thi
>>>>>>> 5d346ffa82622703a501ef1a563754f293af0491
                            </a>
                             <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('courseList') }}">KET</a>
                                <a class="dropdown-item" href="{{ route('courseList') }}">PET</a>
                                <a class="dropdown-item" href="{{ route('courseList') }}">TOEIC</a>
                                <a class="dropdown-item" href="{{ route('courseList') }}">IELTS</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                              Ôn thi chứng chỉ
                            </a>
                             <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('courseList') }}">KET</a>
                                <a class="dropdown-item" href="{{ route('courseList') }}">PET</a>
                                <a class="dropdown-item" href="{{ route('courseList') }}">TOEIC</a>
                                <a class="dropdown-item" href="{{ route('courseList') }}">IELTS</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('courseList') }}" id="navbardrop" data-toggle="dropdown">
                              Ôn thi vào lớp 10
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('course') }}">Luyện đề thi</a>
                                <a class="dropdown-item" href="{{ route('course') }}">Luyện theo dạng bài</a>
                                <a class="dropdown-item" href="{{ route('course') }}">Luyện theo chuyên đề</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('courseList') }}" id="navbardrop" data-toggle="dropdown">
                              Ôn thi THPT
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('course') }}">Luyện đề thi</a>
                                <a class="dropdown-item" href="{{ route('course') }}">Luyện theo dạng bài</a>
                                <a class="dropdown-item" href="{{ route('course') }}">Luyện theo chuyên đề</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('courseList') }}" id="navbardrop" data-toggle="dropdown">
                              Ôn thi vào ĐH
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('course') }}">Luyện đề thi</a>
                                <a class="dropdown-item" href="{{ route('course') }}">Luyện theo dạng bài</a>
                                <a class="dropdown-item" href="{{ route('course') }}">Luyện theo chuyên đề</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('courseList') }}" id="navbardrop" data-toggle="dropdown">
                        Tiếng Anh Chuyên Ngành
                      </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('courseList') }}">Điện lạnh</a>
                                <a class="dropdown-item" href="{{ route('courseList') }}">Điện công nghiệp và dân dụng</a>
                                <a class="dropdown-item" href="{{ route('courseList') }}">Thư tín thương mại</a>
                                <a class="dropdown-item" href="{{ route('courseList') }}">Nhà hàng khách sạn</a>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>Đăng nhập</a>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link " id="search">
                                <i class="ti-search"></i>
                            </a>
                        </li>

                    </ul> --}}
                </div>
            </div>
        </nav>
    </div>
</div>