<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrator | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset("vendor/admin-lte/plugins/fontawesome-free/css/all.min.css") }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("vendor/admin-lte/dist/css/adminlte.min.css") }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
        body {
            background-color: #a06060 !important;
            background: linear-gradient(130deg, #a06060 20%, #aaa 100%) no-repeat center center fixed !important;
        }
        .login-box-body, .register-box-body {
            background-color: rgba(0,0,0,0.1);
            border-radius: 2px;
            padding: 20px;
            border-top: 0;
            color: #666;
        }

        .icheckbox_square-blue, .iradio_square-blue {
            display: inline-block;
            *display: inline;
            vertical-align: middle;
            margin: 0;
            padding: 0;
            width: 22px;
            height: 22px;
            background: green no-repeat;
            border: none;
            cursor: pointer;
        }
        .iCheck-helper {
            position: absolute;
            top: -20%;
            left: -20%;
            display: block;
            width: 140%;
            height: 140%;
            margin: 0px;
            padding: 0px;
            background: rgb(255, 255, 255);
            border: 0px;
            opacity: 0;
        }
        .checkbox, .radio {
            position: relative;
            display: block;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>Panel</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Login Form</p>
        @if($errors->has('not_match'))
            <p style="color: #941342; font-weight: normal"> {{ $errors->first('not_match') }}</p>
        @endif
        <form action="{{ route('admin.login.post') }}" method="post">
            @csrf
            <div class="form-group has-feedback">
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @error('password')
                    <span class="invalid-feedback  @error('password') is-invalid @enderror" role="alert">
                       {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="checkbox icheck"  >
                        <label style="font-weight: normal">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary float-right" style="background: #3c8dbc; border-color: none">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{ asset("vendor/admin-lte/plugins/jquery/dist/jquery.min.js") }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset("vendor/admin-lte/plugins/bootstrap/dist/js/bootstrap.min.js") }}"></script>
<!-- iCheck -->
<script src="{{ asset("vendor/admin-lte/plugins/iCheck/icheck.min.js") }}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
</body>
</html>
