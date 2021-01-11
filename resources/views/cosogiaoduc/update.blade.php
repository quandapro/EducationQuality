<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kết quả KD CLGD</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">

    <!--core js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<div id="header" class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-md-10">
            <div class="col-md-3 col-sm-12 logo-home" id="logo-home">
                <a href="welcome"><img class="img-responsive" style="width:200px; height: 65px;" src="/images/logo.jpg" alt="Chania"></a>
            </div>
            <div class="col-md-9 col-sm-12 menu-home">
                <nav class="navbar navbar-expand-lg">
                    <a class="nav-link" href="welcome">Trang chủ <span class="sr-only">(current)</span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="page_intro">Giới thiệu <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="welcome">Sự kiện</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Kết quả KDCLGD
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a href="/view_CSGD_programs" class="dropdown-item" href="#">Kiểm định cơ sở giáo dục</a>
                                    <a href="/view_CTDT_programs" class="dropdown-item" href="#">Kiểm định chương trình đào tạo </a>
                                </div>
                            </li>

                        </ul>

                    </div>
                </nav>
            </div>
        </div>
        <div class="col-sm-6 col-md-2 header-login-signup">
            <button type="button" class="btn btn-primary btn-login" id="btn-login"><a href="page_login.html">Đăng xuất</a></button>
        </div>
    </div>
</div>
<div id="body" class="container">


    <div class="container partner-body">
        <div class="row">
            <div class="col-md-12">
                <div class="list-partner">
                    <a href="#">
                        <img src="/images/partner1.jpg" class="img-thumbnail" alt="">
                    </a>
                    <a href="#">
                        <img src="/images/partner4.jpg" class="img-thumbnail" alt="">
                    </a>
                    <a href="#">
                        <img src="/images/logo1.jpg" class="img-thumbnail" alt="">
                    </a>
                    <a href="#">
                        <img src="/images/partner2.jpg" class="img-thumbnail" alt="">
                    </a>
                    <a href="#">
                        <img src="/images/partner6.jpg" class="img-thumbnail" alt="">
                    </a>
                    <a href="#">
                        <img src="/images/partner3.jpg" class="img-thumbnail" alt="">
                    </a>
                    <a href="#">
                        <img src="/images/partner5.jpg" class="img-thumbnail" alt="">
                    </a>
                    <a href="#">
                        <img src="/images/partner7.jpg" class="img-thumbnail" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container infomation-body">
        <div class="row infomation-body-title">
            <h3>Sửa thông tin cơ sở giáo dục</h3>
        </div>
        <form action = "/view_CSGD_update_programs/{{$programs[0] -> id_CSGD}}" method = "post">
            @csrf
            <div class="form-group">
                <label for="nameProgram">Tên cơ sở giáo dục:</label>
                <input value="{{$programs[0] -> ten_CSGD}}" type="text" class="form-control" id="name"  name="ten_CSGD">
            </div>

            <div class="form-group">
                <label for="Program">Ngày kiểm định:</label>
                <input value="{{$programs[0] -> ngay_kd}}" type="text" class="form-control" id="date"  name="ngay_kd">
            </div>

            <div class="form-group">
                <label for="nameCourse">Ngày hết hạn kiểm định:</label>
                <input value="{{$programs[0] -> ngayHetHan_kd}}" type="text" class="form-control" id="status"  name="ngayHetHan_kd">
            </div>

            <div class="form-group">
                <label for="Program">Thời hạn:</label>
                <input value="{{$programs[0] -> thoiHan}}" type="text" class="form-control" id="date"  name="thoiHan">
            </div>

            <button type="submit" class="btn btn-primary">Sửa</button>
        </form>

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
                <span> @2020 HUS University. All rights reserved.</span>
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
