<!DOCTYPE html>
<html>

<head>
    <base href="{{asset('/dist/admin')}}/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Web Tiếng Anh Trực Tuyến | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="index2.html"><b>Login </b> Web Tiếng Anh</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Đăng Nhập </p>

                <form role="form" method="post">
                    @include('errors.note')
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="password" type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" name="remember" value="Remember Me">
                                <label for="remember">
                                    Nhớ mật khẩu
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="submit" value="Login" class="btn btn-primary" style="white-space: nowrap;">Đăng nhập</button>
                            {{csrf_field()}}
                        </div>
                        <!-- /.col -->
                    </div>

                </form>

                <div class="social-auth-links text-center mb-3">
        <p>- HOẶC -</p>
        <a href="{{route('redirect',['facebook'])}}" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Đăng nhập bằng Facebook
        </a>
        <a href="{{route('redirectgg')}}" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Đăng nhập bằng Google+
        </a>
      </div>
                <!-- /.social-auth-links -->

                {{-- <p class="mb-1">
                    <a href="forgot-password.html">Bạn quên mật khẩu ?</a>
                </p> --}}
                <div class="col-lg-12 text-center mt-4">
                    Bạn chưa có tài khoản? <a href="{{ route('register') }}" class="text-danger">Đăng ký ngay</a>
                </div>
                <p class="mb-0">
                    <a href="register.html" class="text-center"></a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    {{-- Không cho nhập kí tự đặc biệt --}}
    <script>
        $('#password').on('input',function(){
    // console.log(this.value);
    this.value=this.value.replace(/[^([a-zA-Z0-9)]+/g, '');
  });
    </script>

</body>

</html>
