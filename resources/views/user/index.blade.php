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
</head>

<body>
    <div id="header" class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-10">
                <div class="col-md-3 col-sm-12 logo-home" id="logo-home">
                    <a href="welcome"><img class="img-responsive" style="width:200px; height: 65px;" src="images/logo.jpg" alt="Chania"></a>
                </div>
                <div class="col-md-9 col-sm-12 menu-home">
                    <nav class="navbar navbar-expand-lg">
                        <a class="nav-link" href="welcome">Trang chủ <span class="sr-only">(current)</span></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="card-body">
                            @isset($role)
                                @if ( $role == 0 )
                                    <a href="/admin_home">Admin</a><br>
                                @endif
                            @endisset

                        </div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="page_intro">Giới thiệu <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="welcome">Sự kiện</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/donvikiemdinh-records">Đơn vị kiểm định</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/nguoikiemdinh-records">Danh sách người kiểm định</a>
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
                <button type="button" class="btn btn-primary btn-login" id="btn-login"><a href="/logout">Đăng xuất</a></button>
            </div>
        </div>
    </div>
    <div id="body" class="container">
        <div class="row slide-body">
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/variant1.jpg" class="img-thumbnail d-block " alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Kiểm định chất lượng giáo dục</h5>
                                <p>website quản lý kết quả kiểm định chất lượng giáo dục</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/variant2.jpg" class="img-thumbnail d-block " alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Kiểm định chất lượng giáo dục</h5>
                                <p>website quản lý kết quả kiểm định chất lượng giáo dục</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/variant3.jpg" class="img-thumbnail d-block " alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Kiểm định chất lượng giáo dục</h5>
                                <p>Website quản lý kết quả kiểm định chất lượng giáo dục</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

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
                <h3 style="color: #2a73cc;">Quản lý người dùng</h3>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row left-info">
                <table border="2" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Tên người dùng</th>
                            <th scope="col">Vai trò</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->full_name }}</td>
                            @if($user->role == 0)
                                <td>Sở hữu</td>
                            @else
                                <td>Quản trị</td>
                            @endif
                            <td id="setting">
                                <a href="/update-user/{{ $user->id_user }}" class="btn btn-primary active" role="button" aria-pressed="true">Sửa</a>
                                <a href="/destroy-user/{{ $user->id_user }}" class="btn btn-danger active" role="button" aria-pressed="true">Xóa</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="btn btn-success" href="/user-create" role="button">Thêm mới</a>
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
