<!DOCTYPE html>
<html lang="vi">

<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="">
    <link rel="shortcut icon" href="{{ asset('dist/img/favicon.png') }}" type="image/x-icon">
    <title>Web English - @yield('title')</title>
    @yield('head-import')
    <script>
        $(window).load(function(){        
       $('#myModal').modal('show');
        }); 
      </script>
</head>

<body class="sidebar-mini layout-fixed pace-success">
    @yield('main')
    @yield('js-import')
</body>

</html>