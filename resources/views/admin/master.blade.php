<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('dist/admin/dist/img/AdminLTELogo.png') }}" type="image/x-icon">

    <base href="{{asset('/dist/admin')}}/">

    <title>Admin - @yield('title')</title>

    @include('admin.components.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    @include('admin.components.navbar')
    @include('admin.components.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('admin.components.page-header')
        <div class="container-fluid">
            @yield('main')
        </div>
    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright 2014-2019 AdminLTE</strong>
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.5
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    @include('admin.components.script')
</body>

</html>
