<div class="header_area">
<div class="main_menu">
        <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
              <input
                type="text"
                class="form-control"
                id="search_input"
                placeholder="Search Here"
              />
              <button type="submit" class="btn"></button>
              <span
                class="ti-close"
                id="close_search"
                title="Close Search"
              ></span>
            </form>
          </div>
        </div>
        
        <nav class="navbar navbar-expand-lg navbar-light">
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
              </ul>
            </div>
          </div>
        </nav>
      </div>
      </div>

      <script>
        var url = window.location.href;

        var myMenuLinks = $('#menu');

        myMenuLinks.filter(function() {
          return this.href == url;
          }).addClass('active');
      </script>