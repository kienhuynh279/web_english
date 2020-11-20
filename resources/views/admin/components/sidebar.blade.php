<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('admin/')}}" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Web Giáo Dục</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{Storage::url('/upload/img/user/'.Auth::user()->avatar)}}" class="img-circle elevation-2">
            </div>
            <div class="info">
                <a class="d-block"> {{Auth::user()->username}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{asset('admin/user')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Quản Lý User
                            {{-- <span class="right badge badge-danger">Admin</span> --}}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{asset('admin/banner')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Quản Lý Banner
                            {{-- <span class="right badge badge-danger">Banner</span> --}}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{asset('admin/postcats')}}" class="nav-link">
                        <i class="nav-icon fas fa-stream"></i>
                        <p>
                            Quản Lý Danh Mục
                            {{-- <span class="right badge badge-danger">Banner</span> --}}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{asset('admin/posts')}}" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Quản Lý Tài Liệu
                            {{-- <span class="right badge badge-danger">Banner</span> --}}
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('adminNew') }}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Quản Lý Tin tức
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                        </p>
                    </a>
                    {{-- <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('adminBlogCate') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Loại Bài Blogs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('adminNew') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh Sách Blogs</p>
                    </a>
                </li>
            </ul> --}}
            </li>


            <li class="nav-item">
                <a href="{{ route('adminTest') }}" class="nav-link">
                    <i class="nav-icon fas fa-question"></i>
                    <p>
                        Quản Lý Câu Hỏi
                        {{-- <i class="right fas fa-angle-left"></i> --}}
                    </p>
                </a>
                {{-- <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('adminTestCategory') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Loại Câu Hỏi</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('adminTest') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh Sách Câu Hỏi</p>
                </a>
            </li>
            </ul> --}}
            </li>

            <li class="nav-item">
                <a href="{{ route('adminMakeTest') }}" class="nav-link">
                    <i class="nav-icon fas fa-chalkboard-teacher"></i>
                    <p>
                        Quản Lý Bài Kiểm Tra
                        {{-- <i class="right fas fa-angle-left"></i> --}}
                    </p>
                </a>
                {{-- <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('adminFormCate') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Loại Bài Kiểm Tra</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('adminMakeTest') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh Sách Bài Kiểm tra</p>
                </a>
            </li>
            </ul> --}}
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
