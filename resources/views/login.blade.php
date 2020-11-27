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
    <form action="welcome" method="">
        <div class="login_form width_login">
            <div class="imgcontainer">
                <img src="./images/logo.jpg" alt="logo" class="login_logo">
            </div>

            <div class="container">
                <label for="uname"><b>Tài khoản</b></label>
                <input type="text" placeholder="" name="uname" required>

                <label for="psw"><b>Mật khẩu</b></label>
                <input type="password" placeholder="" name="psw" required>

                <button type="submit" class="btn-loginform">Đăng nhập</button>
                <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>

            <div class="container" style="">
                <button type="button" class="cancelbtn">Thoát</button>
                <span class="psw">Quên mật khẩu <a href="#">password?</a></span>
            </div>
        </div>
    </form>
</body>

</html>
