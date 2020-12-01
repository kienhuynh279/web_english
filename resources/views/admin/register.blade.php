<!DOCTYPE html>
<html>

<head>
    <base href="{{asset('/dist/admin')}}/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Web Tiếng Anh Trực Tuyến | Register</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href=""><b>Đăng ký </b> tài khoản </a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Đăng Ký</p>
                @if (session('msg') !== null)
                <div class="alert alert-danger">
                    {{ session('msg') }}
                </div>
                @endif

                @include('errors.note')

                {{-- @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
            @endforeach
            @endif --}}

            <form action="{{ route('register') }}" method="post" id="form-register">
                <div class="input-group mb-3">
                    <input name="username" id="username" type="text" class="form-control" placeholder="Tên người dùng" value="{{ old('username') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input name="email" id="email" type="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                    <div class=" input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Mật Khẩu">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Đăng Ký</button>
                    </div>
                    {{csrf_field()}}
                </div>
                
            </form>

            {{-- <div class="social-auth-links text-center">
        <p>- HOẶC -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
         Đăng nhập bằng Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Đăng nhập bằng Google+
        </a>
      </div> --}}


            <div class="col-lg-12 text-center mt-4">
                Bạn đã có tài khoản? <a href="{{ route('login') }}" class="text-danger">Đăng nhập ngay</a>
            </div>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>

    {{-- <script type="text/javascript">
    $("#form-register").validate({
        rules:{
            username:{
                required:true,
                minlength:3
            },
            email:{
                required:true,
                email:true
            },
            password:{
                required:true,
                minlength:8
            },
            passwordAgain:{
                equalTo:"#password"
            }
        },
        messages:{
            username:{
                required:"Vui lòng nhập username"
                minlength:"Phải nhập 3 kí tự trở lên"
            }
            password:{
                required:"Vui lòng nhập mật khẩu"
                minlength:"Mật khẩu phải từ 8 kí tự trở lên"
            }
            passwordAgain:{
                equalTo:"Mật khẩu xác nhận không đúng"
            }
            email:{
                required:"Vui lòng nhập email"
                email:"Không đúng định dạng email"
            }
        }
    })
</script> --}}



    {{-- Không cho nhập kí tự đặc biệt --}}
    <script>
        $('#password').on('input',function(){
      // console.log(this.value);
      this.value=this.value.replace(/[^([a-zA-Z0-9)]+/g, '');
    });
    $('#passwordAgain').on('input',function(){
      // console.log(this.value);
      this.value=this.value.replace(/[^([a-zA-Z0-9)]+/g, '');
    });
    </script>

</body>

</html>
