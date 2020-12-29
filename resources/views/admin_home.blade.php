<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trang chủ</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <!--core js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body style="background-image: url(./images/back_admin.jpg);">
    <div id="header" class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 logo-home" id="logo-home">
                <a href="welcome"><img class="img-responsive" style="width:300px; height: 65px;" src="images/logo2.jpg" alt="Chania"></a>
            </div>
            <div class="col-md-4 col-sm-12 menu-home" style="float: right;">
                <nav class="navbar navbar-expand-lg">
                    <a class="nav-link" href="welcome">Trang chủ <span class="sr-only">(current)</span></a>
                </nav>
            </div>
        </div>
    </div>
    <div id="body" class="container">
        <div class="container partner-body">
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{ __('You are logged in!') }}
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="list-partner">
                        <a href="#">
                            <img src="images/partner1.jpg" class="img-thumbnail" alt="">
                        </a>
                        <a href="#">
                            <img src="images/partner4.jpg" class="img-thumbnail" alt="">
                        </a>
                        <a href="#">
                            <img src="images/logo1.jpg" class="img-thumbnail" alt="">
                        </a>
                        <a href="#">
                            <img src="images/partner2.jpg" class="img-thumbnail" alt="">
                        </a>
                        <a href="#">
                            <img src="images/partner6.jpg" class="img-thumbnail" alt="">
                        </a>
                        <a href="#">
                            <img src="images/partner3.jpg" class="img-thumbnail" alt="">
                        </a>
                        <a href="#">
                            <img src="images/partner5.jpg" class="img-thumbnail" alt="">
                        </a>
                        <a href="#">
                            <img src="images/partner7.jpg" class="img-thumbnail" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container infomation-body">
            <div class="row admin_home_body">
                <h3></h3>
            </div>
            <div class="row left-info admin_home-content">
                <div class="col-md-5 col-sm-12">
                    <div class="admin_home_list">
                        <span class="admin_home_title">Danh mục quản lý</span>
                        <ul>
                            <li>
                                <a href="">
                                    <span>Quản lý tài khoản</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span>Quản lý kết quả kiểm định chất lượng</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span>Quản lý tin tức-sự kiện</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="admin_home_fast">
                        <span class="admin_home_title">Công cụ nhanh</span>
                        <ul>
                            <li>
                                <a href="">
                                    <span>Thêm tài khoản</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span>Thêm tin tức</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12">
                    <img src="images/admin_homepage.jpg" class="img-thumbnail" alt="">
                </div>
            </div>
        </div>
    </div>

    <div id="footer" class="container-fluid footer">
        <div class="row">
            <div class="col-md-5 footer-left">
                <h3>Kiểm định CLGD</h3>
                <div class="footer-intro">
                    <p>
                        Trang web được xây dựng với mục đích lưu trữ, truy xuất các thông tin liên quan đến kiếm định chất lượng giáo dục đối với các cơ sở giáo dục và chương trình đào tạo
                    </p>
                    <span> @20120 HUS University. All rights reserved.</span>
                </div>
            </div>
            <div class="col-md-6 footer-more">
                <div class="col-md-8 footer-more-item">
                    <h5>Liên hệ</h5>
                    <ul>
                        <li>
                            <p>Tổng đài: (+84-28) 37 242 160 - Số nội bộ: 4994, 4988</p>
                        </li>
                        <li>
                            <p>ĐT trực tiếp/Fax: (+84-28) 62 849 199</p>
                        </li>
                        <li>
                            <p>Email: ttkiemdinh@hus.edu.vn</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
