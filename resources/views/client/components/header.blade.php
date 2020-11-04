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
                    <img src="{{ asset('dist/img/logo_new.png') }}" weight="60px" height="60px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="icon-bar"></span> <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('home') }}">Trang Chủ</a>
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
                            <a class="nav-link" href="login.html"><i class="fas fa-sign-in-alt"></i>Đăng nhập</a>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link " id="search">
                                <i class="ti-search"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>