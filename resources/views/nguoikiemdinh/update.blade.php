<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kết quả KD CLGD</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!--core js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <style>
        form{
            width:50%;
            margin:auto;
         }   
    </style>
</head>

<body>
    <div id="header" class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-10">
                <div class="col-md-3 col-sm-12 logo-home" id="logo-home">
                    <a href="home.html"><img class="img-responsive" style="width:200px; height: 65px;" src="images/logo.jpg" alt="Chania"></a>
                </div>
                <div class="col-md-9 col-sm-12 menu-home">
                    <nav class="navbar navbar-expand-lg">
                        <a class="nav-link" href="#">Trang chủ <span class="sr-only">(current)</span></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="page_intro.html">Giới thiệu <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Sự kiện</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kết quả KDCLGD
                              </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Kiểm định các cấp</a>
                                        <a class="dropdown-item" href="#">Kiểm định chương trình đào tạo</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Kiểm định chứng chỉ</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Liên hệ</a>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-sm-6 col-md-2 header-login-signup">
                <button type="button" class="btn btn-primary btn-login" id="btn-login"><a href="page_home.html">Đăng xuất</a></button>
            </div>
        </div>
    </div>
    <div id="body" class="container">
        <div class="container partner-body">
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
            <div class="row infomation-body-title">
                <h3 style="color: #2a73cc;">Cập nhật thông tin</h3>
            </div>
            <form action="/update-inspection/{{$inspection->id_nguoiKD}}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Họ tên</label>
                    <input name="full_name" value="{{$inspection->full_name}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter fullname">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Quê quán</label>
                    <input name="queQuan" value="{{$inspection->queQuan}}" type="text" class="form-control" id="exampleInputPassword1" placeholder="Quê quán">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Đơn vị kiểm định</label>
                    <input name="id_DVKD" value="{{$inspection->id_DVKD}}" type="text" class="form-control" id="exampleInputPassword1" placeholder="Đơn vị kiểm định">
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