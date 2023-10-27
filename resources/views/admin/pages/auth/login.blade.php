<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng nhập</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{asset('admin/css/sb-admin-2.min.css')}}">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                <div class="w-100 text-center">
{{--                                <img src="{{ asset('storage/' . $config->logo ?? '') }}" style=" height: 100%; " alt="{{$config->fullname??''}}">--}}
                                </div>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Điền thông tin đăng nhập !</h1>
                                    </div>
                                    @if(session('retriesLeft')&& (int)session('retriesLeft') > 0)
                                    <span class="text-danger">Bạn còn {!! session('retriesLeft') !!} lượt đăng nhập tài khoản (*)</span>
                                    @endif
                                    <form class="user" action="{{ route('submitLogin') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" name="email" value="{{old('email')}}" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                            @error('email')
                                            <span class="text-danger">
                                                {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                            @error('password')
                                            <span class="text-danger">
                                                {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" name="remember" value="1" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Luôn đăng nhập</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Đăng nhập</button>
                                        <!-- <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> -->
                                    </form>
                                    <hr>
{{--                                    <div class="text-center">--}}
{{--                                        <a class="small" href="{{route('forgetPassword')}}">Quên mật khẩu?</a>--}}
{{--                                    </div>--}}
{{--                                    <div class="text-center">--}}
{{--                                        <a class="small" href="{{route('register')}}">Đăng ký tài khoản!</a>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin/js/sb-admin-2.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('error'))
    <script>
        swal("Đăng nhập thất bại", " {!! session('error') !!}", "error", {
            button: "OK",
        })
    </script>
    @endif

</body>

</html>