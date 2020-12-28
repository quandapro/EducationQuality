<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="./js/jquery-3.5.1.min.js">

    <!--core js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/5340e42107.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body id="page_login">
<form action="{{route('login')}}" method="POST">
    @csrf <!-- {{ csrf_field() }} -->
    <div class="login_form width_login">
        <div class="imgcontainer">
            <img src="./images/logo.jpg" alt="logo" class="login_logo">
        </div>

{{--        <div class="container">--}}
{{--            <label for="uname"><b>Tài khoản</b></label>--}}
{{--            <input type="text" placeholder="" name="username" required>--}}

{{--            <label for="psw"><b>Mật khẩu</b></label>--}}
{{--            <input type="password" placeholder="" name="password" required>--}}

{{--            <button type="submit" class="btn-loginform">Đăng nhập</button>--}}
{{--            <label>--}}
{{--                <input type="checkbox" checked="checked" name="remember"> Remember me--}}
{{--            </label>--}}
{{--        </div>--}}

        <form method = "POST" action="{{route('login')}}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="username" class="#"><b>{{ __('Tên người dùng')}}</b></label>
                    <input type="text" id = "username" class = "form-control @error('username') is-invalid @enderror" name = "username" value = "{{ old('username') }}" placeholder = "Enter your username.." autocomplete = "username" autofocus required>
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password" class="#"><b>{{ __('Mật khẩu')}}</b></label>
                    <input type="password" id = "password" class = "form-control @error('password') is-invalid @enderror" name = "password" placeholder = "Enter your password.." autocomplete="current-password" required>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
{{--                <div class="form-check">--}}
{{--                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                    <small>--}}
{{--                        <label class="form-check-label" for="remember">--}}
{{--                            {{ __('Ghi nhớ mật khẩu') }}--}}
{{--                        </label>--}}
{{--                    </small>--}}
{{--                    @if (Route::has('password.request'))--}}
{{--                        <a class = "btn btn-forgot" style = 'margin: 0px;' href="{{ route('password.request') }}">--}}
{{--                            <small>{{ __('Quên mật khẩu?') }}</small>--}}
{{--                        </a>--}}
{{--                    @endif--}}

{{--                </div>--}}

                <div class="card-link form-group">
                    <div class="#" >
                        <button type="submit" class="btn btn-outline-dark" style = "width:100%; margin: 0.5rem 0;">
                            {{ __('Đăng nhập') }}
                        </button>
                    </div>
{{--                    <div class="btn-signin">--}}
{{--                        @if (Route::has('register'))--}}
{{--                            <small><span>Chưa có tài khoản?</span></small> <a class="btn align-items-" href="{{ route('register') }}" style = 'padding: 0px; text-decoration:underline;'><small>Đăng ký tại đây!</small></a>--}}
{{--                        @endif--}}
{{--                    </div>--}}
                </div>
            </div>
        </form>

        <div class="container" style="">
            <button type="button" class="cancelbtn">Thoát</button>
            <span class="psw">Quên mật khẩu <a href="#">password?</a></span>
        </div>
    </div>
</form>
</body>

</html>
