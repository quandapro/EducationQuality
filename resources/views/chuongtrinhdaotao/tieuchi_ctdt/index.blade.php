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
            <h3>ten ctdt</h3>
        </div>
        <div class="row left-info">
            <table border="2" class="table table-hover">
                <thead>

                <tr>
                    <th scope="col" rowspan=2 colspan=2><b>Tiêu chuẩn/<br>Tiêu chí</b></th>
                    <th scope="col" colspan=4><b>Điểm theo tiêu chuẩn</b></th>

                </tr>
                <tr>
                    @foreach ($programs as $program)
                        <td scope="col" ><a href="/view_TC_CTDT_programs/{{$program -> id_CTDT}}" id="create_course">Điểm theo tiêu chí</a></td>
                    @endforeach
                    <td scope="col" >Mức trung bình</td>
                    <td scope="col" >Số tiêu chí đạt</td>
                    <td scope="col" >Tỉ lệ số tiêu chí đạt(%)</td>
                </tr>
                </thead>


                <tbody>
                    @foreach ($programs as $program)
                    <tr>
                        <td rowspan="4"><i>Tiêu chuẩn 1</i></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 1.1</td>
                        <td>{{ $program -> tieuChi1_1 }}</td>
                        <td rowspan="3"></td>
                        <td rowspan="3"></td>
                        <td rowspan="3"></td>

                    </tr>
                    <tr>
                        <td>Tiêu chí 1.2</td>
                        <td>{{ $program -> tieuChi1_2 }}</td>

                    </tr>
                    <tr>
                        <td>Tiêu chí 1.3</td>
                        <td>{{ $program -> tieuChi1_3 }}</td>
                    </tr>
                    <tr>
                        <td rowspan="4"><i>Tiêu chuẩn 2</i></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 2.1</td>
                        <td>{{ $program -> tieuChi2_1 }}</td>
                        <td rowspan="3"></td>
                        <td rowspan="3"></td>
                        <td rowspan="3"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 2.2</td>
                        <td>{{ $program -> tieuChi2_2 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 2.3</td>
                        <td>{{ $program -> tieuChi2_3 }}</td>
                    </tr>
                    <tr>
                        <td rowspan="4"><i>Tiêu chuẩn 3</i></td>

                    </tr>
                    <tr>
                        <td>Tiêu chí 3.1</td>
                        <td>{{ $program -> tieuChi3_1 }}</td>
                        <td rowspan="3"></td>
                        <td rowspan="3"></td>
                        <td rowspan="3"></td>

                    </tr>
                    <tr>
                        <td>Tiêu chí 3.2</td>
                        <td>{{ $program -> tieuChi3_2 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 3.3</td>
                        <td>{{ $program -> tieuChi3_3 }}</td>
                    </tr>
                    <tr>
                        <td rowspan="4"><i>Tiêu chuẩn 4</i></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 4.1</td>
                        <td>{{ $program -> tieuChi4_1 }}</td>
                        <td rowspan="3"></td>
                        <td rowspan="3"></td>
                        <td rowspan="3"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 4.2</td>
                        <td>{{ $program -> tieuChi4_2 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 4.3</td>
                        <td>{{ $program -> tieuChi4_3 }}</td>
                    </tr>
                    <tr>
                        <td rowspan="6"><i>Tiêu chuẩn 5</i></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 5.1</td>
                        <td>{{ $program -> tieuChi5_1 }}</td>
                        <td rowspan="5"></td>
                        <td rowspan="5"></td>
                        <td rowspan="5"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 5.2</td>
                        <td>{{ $program -> tieuChi5_2 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 5.3</td>
                        <td>{{ $program -> tieuChi5_3 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 5.4</td>
                        <td>{{ $program -> tieuChi5_4 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 5.5</td>
                        <td>{{ $program -> tieuChi5_5 }}</td>
                    </tr>
                    <tr>
                        <td rowspan="8"><i>Tiêu chuẩn 6</i></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 6.1</td>
                        <td>{{ $program -> tieuChi6_1 }}</td>
                        <td rowspan="7"></td>
                        <td rowspan="7"></td>
                        <td rowspan="7"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 6.2</td>
                        <td>{{ $program -> tieuChi6_2 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 6.3</td>
                        <td>{{ $program -> tieuChi6_3 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 6.4</td>
                        <td>{{ $program -> tieuChi6_4 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 6.5</td>
                        <td>{{ $program -> tieuChi6_5 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 6.6</td>
                        <td>{{ $program -> tieuChi6_6 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 6.7</td>
                        <td>{{ $program -> tieuChi6_7 }}</td>
                    </tr>
                    <tr>
                        <td rowspan="6"><i>Tiêu chuẩn 7</i></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 7.1</td>
                        <td>{{ $program -> tieuChi7_1 }}</td>
                        <td rowspan="5"></td>
                        <td rowspan="5"></td>
                        <td rowspan="5"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 7.2</td>
                        <td>{{ $program -> tieuChi7_2 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 7.3</td>
                        <td>{{ $program -> tieuChi7_3 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 7.4</td>
                        <td>{{ $program -> tieuChi7_4 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 7.5</td>
                        <td>{{ $program -> tieuChi7_5 }}</td>
                    </tr>
                    <tr>
                        <td rowspan="6"><i>Tiêu chuẩn 8</i></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 8.1</td>
                        <td>{{ $program -> tieuChi8_1 }}</td>
                        <td rowspan="5"></td>
                        <td rowspan="5"></td>
                        <td rowspan="5"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 8.2</td>
                        <td>{{ $program -> tieuChi8_2 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 8.3</td>
                        <td>{{ $program -> tieuChi8_3 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 8.4</td>
                        <td>{{ $program -> tieuChi8_4 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 8.5</td>
                        <td>{{ $program -> tieuChi8_5 }}</td>
                    </tr>
                    <tr>
                        <td rowspan="6"><i>Tiêu chuẩn 9</i></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 9.1</td>
                        <td>{{ $program -> tieuChi9_1 }}</td>
                        <td rowspan="5"></td>
                        <td rowspan="5"></td>
                        <td rowspan="5"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 9.2</td>
                        <td>{{ $program -> tieuChi9_2 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 9.3</td>
                        <td>{{ $program -> tieuChi9_3 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 9.4</td>
                        <td>{{ $program -> tieuChi9_4 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 9.5</td>
                        <td>{{ $program -> tieuChi9_5 }}</td>
                    </tr>
                    <tr>
                        <td rowspan="7"><i>Tiêu chuẩn 10</i></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 10.1</td>
                        <td>{{ $program -> tieuChi10_1 }}</td>
                        <td rowspan="6"></td>
                        <td rowspan="6"></td>
                        <td rowspan="6"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 10.2</td>
                        <td>{{ $program -> tieuChi10_2 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 10.3</td>
                        <td>{{ $program -> tieuChi10_3 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 10.4</td>
                        <td>{{ $program -> tieuChi10_4 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 10.5</td>
                        <td>{{ $program -> tieuChi10_5 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 10.6</td>
                        <td>{{ $program -> tieuChi10_6 }}</td>
                    </tr>
                    <tr>
                        <td rowspan="6"><i>Tiêu chuẩn 11</i></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 11.1</td>
                        <td>{{ $program -> tieuChi11_1 }}</td>
                        <td rowspan="5"></td>
                        <td rowspan="5"></td>
                        <td rowspan="5"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 11.2</td>
                        <td>{{ $program -> tieuChi11_2 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 11.3</td>
                        <td>{{ $program -> tieuChi11_3 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 11.4</td>
                        <td>{{ $program -> tieuChi11_4 }}</td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 11.5</td>
                        <td>{{ $program -> tieuChi11_5 }}</td>
                    </tr>

                    <tr>
                        <td colspan="3"><b>Đánh giá chung CTĐT</b></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    @endforeach
                </tbody>

            </table>

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
