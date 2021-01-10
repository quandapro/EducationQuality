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
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Liên hệ</a>
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
            <h3 style="text-align:center">Sửa tiêu chí cơ sở giáo dục</h3>
        </div>
        <h5 style="text-align:center"><i>(1: Đạt, 0: Chưa đạt)</i></h5>
        <div class="row left-info">
            <table border="2" align="center" class="table table-hover" style="width:700px;">
                <form action = "/view_TC_CSGD_update_programs/{{$programs[0] -> id_CSGD}}" method = "post">
                    @csrf
                <thead>

                <tr>
                    <td scope="col"  colspan=2><b>Tiêu chuẩn/<br>Tiêu chí</b></td>
                    <td scope="col" ><button type="submit" class="btn btn-primary">Lưu thay đổi</button></td>

                </tr>

                </thead>


                <tbody class="form-group">
                    <tr>
                        <td rowspan="3" ><i>Tiêu chuẩn 1</i></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 1.1</td>
                        <td><input type="number" min="0" max="1" name="tieuChi1.1"  value={{ $programs[0] -> tieuChi1_1 }} class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 1.2</td>
                        <td><input type="number" min="0" max="1" name="tieuChi1.2" value="{{ $programs[0] -> tieuChi1_2 }}"  class="form-control"></td>
                    </tr>

                    <tr>
                        <td rowspan="8" ><i>Tiêu chuẩn 2</i></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 2.1</td>
                        <td><input type="number" min="0" max="1" name="tieuChi2.1" value="{{ $programs[0] -> tieuChi2_1 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 2.2</td>
                        <td><input type="number" min="0" max="1" name="tieuChi2.2" value="{{ $programs[0]-> tieuChi2_2 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 2.3</td>
                        <td><input type="number" min="0" max="1" name="tieuChi2.3" value="{{ $programs[0] -> tieuChi2_3 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 2.4</td>
                        <td><input type="number" min="0" max="1" name="tieuChi2.4" value="{{ $programs[0] -> tieuChi2_4 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 2.5</td>
                        <td><input type="number" min="0" max="1" name="tieuChi2.5" value="{{ $programs[0] -> tieuChi2_5 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 2.6</td>
                        <td><input type="number" min="0" max="1" name="tieuChi2.6" value="{{ $programs[0] -> tieuChi2_6 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 2.7</td>
                        <td><input type="number" min="0" max="1" name="tieuChi2.7" value="{{ $programs[0] -> tieuChi2_7 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td rowspan="7" ><i>Tiêu chuẩn 3</i></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 3.1</td>
                        <td><input type="number" min="0" max="1" name="tieuChi3.1" value="{{ $programs[0]-> tieuChi3_1 }}" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 3.2</td>
                        <td><input type="number" min="0" max="1" name="tieuChi3.2" value="{{ $programs[0] -> tieuChi3_2 }}" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 3.3</td>
                        <td><input type="number" min="0" max="1" name="tieuChi3.3" value="{{ $programs[0] -> tieuChi3_3 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 3.4</td>
                        <td><input type="number" min="0" max="1" name="tieuChi3.4" value="{{ $programs[0] -> tieuChi3_4 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 3.5</td>
                        <td><input type="number" min="0" max="1" name="tieuChi3.5" value="{{ $programs[0] -> tieuChi3_5 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 3.6</td>
                        <td><input type="number" min="0" max="1" name="tieuChi3.6" value="{{ $programs[0] -> tieuChi3_6 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td rowspan="8" ><i>Tiêu chuẩn 4</i></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 4.1</td>
                        <td><input type="number" min="0" max="1" name="tieuChi4.1" value="{{ $programs[0] -> tieuChi4_1 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 4.2</td>
                        <td><input type="number" min="0" max="1" name="tieuChi4.2" value="{{ $programs[0] -> tieuChi4_2 }}" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 4.3</td>
                        <td><input type="number" min="0" max="1" name="tieuChi4.3" value="{{ $programs[0] -> tieuChi4_3 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 4.4</td>
                        <td><input type="number" min="0" max="1" name="tieuChi4.4" value="{{ $programs[0] -> tieuChi4_4 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 4.5</td>
                        <td><input type="number" min="0" max="1" name="tieuChi4.5" value="{{ $programs[0] -> tieuChi4_5 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 4.6</td>
                        <td><input type="number" min="0" max="1" name="tieuChi4.6" value="{{ $programs[0] -> tieuChi4_6 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 4.7</td>
                        <td><input type="number" min="0" max="1" name="tieuChi4.7" value="{{ $programs[0] -> tieuChi4_7 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td rowspan="9" ><i>Tiêu chuẩn 5</i></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 5.1</td>
                        <td><input type="number" min="0" max="1" name="tieuChi5.1" value="{{ $programs[0] -> tieuChi5_1 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 5.2</td>
                        <td><input type="number" min="0" max="1" name="tieuChi5.2" value="{{ $programs[0]-> tieuChi5_2 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 5.3</td>
                        <td><input type="number" min="0" max="1" name="tieuChi5.3" value="{{ $programs[0] -> tieuChi5_3 }}" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 5.4</td>
                        <td><input type="number" min="0" max="1" name="tieuChi5.4" value="{{ $programs[0] -> tieuChi5_4 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 5.5</td>
                        <td><input type="number" min="0" max="1" name="tieuChi5.5" value="{{ $programs[0] -> tieuChi5_5 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 5.6</td>
                        <td><input type="number" min="0" max="1" name="tieuChi5.6" value="{{ $programs[0] -> tieuChi5_6 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 5.7</td>
                        <td><input type="number" min="0" max="1" name="tieuChi5.7" value="{{ $programs[0] -> tieuChi5_7 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 5.8</td>
                        <td><input type="number" min="0" max="1" name="tieuChi5.8" value="{{ $programs[0] -> tieuChi5_8 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td rowspan="10" ><i>Tiêu chuẩn 6</i></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 6.1</td>
                        <td><input type="number" min="0" max="1" name="tieuChi6.1" value="{{ $programs[0] -> tieuChi6_1 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 6.2</td>
                        <td><input type="number" min="0" max="1" name="tieuChi6.2" value="{{ $programs[0] -> tieuChi6_2 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 6.3</td>
                        <td><input type="number" min="0" max="1" name="tieuChi6.3" value="{{ $programs[0] -> tieuChi6_3 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 6.4</td>
                        <td><input type="number" min="0" max="1" name="tieuChi6.4" value="{{ $programs[0] -> tieuChi6_4 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 6.5</td>
                        <td><input type="number" min="0" max="1" name="tieuChi6.5" value="{{ $programs[0] -> tieuChi6_5 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 6.6</td>
                        <td><input type="number" min="0" max="1" name="tieuChi6.6" value="{{ $programs[0] -> tieuChi6_6 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 6.7</td>
                        <td><input type="number" min="0" max="1" name="tieuChi6.7" value="{{ $programs[0] -> tieuChi6_7 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 6.8</td>
                        <td><input type="number" min="0" max="1" name="tieuChi6.8" value="{{ $programs[0] -> tieuChi6_8 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 6.9</td>
                        <td><input type="number" min="0" max="1" name="tieuChi6.9" value="{{ $programs[0] -> tieuChi6_9 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td rowspan="8" ><i>Tiêu chuẩn 7</i></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 7.1</td>
                        <td><input type="number" min="0" max="1" name="tieuChi7.1" value="{{ $programs[0] -> tieuChi7_1 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 7.2</td>
                        <td><input type="number" min="0" max="1" name="tieuChi7.2" value="{{ $programs[0] -> tieuChi7_2 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 7.3</td>
                        <td><input type="number" min="0" max="1" name="tieuChi7.3" value="{{ $programs[0] -> tieuChi7_3 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 7.4</td>
                        <td><input type="number" min="0" max="1" name="tieuChi7.4" value="{{ $programs[0] -> tieuChi7_4 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 7.5</td>
                        <td><input type="number" min="0" max="1" name="tieuChi7.5" value="{{ $programs[0] -> tieuChi7_5 }}" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 7.6</td>
                        <td><input type="number" min="0" max="1" name="tieuChi7.6" value="{{ $programs[0] -> tieuChi7_6 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 7.7</td>
                        <td><input type="number" min="0" max="1" name="tieuChi7.7" value="{{ $programs[0] -> tieuChi7_7 }}"  class="form-control"></td>
                    </tr>

                    <tr>
                        <td rowspan="4" ><i>Tiêu chuẩn 8</i></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 8.1</td>
                        <td><input type="number" min="0" max="1" name="tieuChi8.1" value="{{ $programs[0] -> tieuChi8_1 }}"  class="form-control"></td>

                    </tr>
                    <tr>
                        <td>Tiêu chí 8.2</td>
                        <td><input type="number" min="0" max="1" name="tieuChi8.2" value="{{ $programs[0] -> tieuChi8_2 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 8.3</td>
                        <td><input type="number" min="0" max="1" name="tieuChi8.3" value="{{ $programs[0] -> tieuChi8_3 }}"  class="form-control"></td>
                    </tr>

                    <tr>
                        <td rowspan="10" ><i>Tiêu chuẩn 9</i></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 9.1</td>
                        <td><input type="number" min="0" max="1" name="tieuChi9.1" value="{{ $programs[0] -> tieuChi9_1 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 9.2</td>
                        <td><input type="number" min="0" max="1" name="tieuChi9.2" value="{{ $programs[0]-> tieuChi9_2 }}" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 9.3</td>
                        <td><input type="number" min="0" max="1" name="tieuChi9.3" value="{{ $programs[0] -> tieuChi9_3 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 9.4</td>
                        <td><input type="number" min="0" max="1" name="tieuChi9.4" value="{{ $programs[0] -> tieuChi9_4 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 9.5</td>
                        <td><input type="number" min="0" max="1" name="tieuChi9.5" value="{{ $programs[0] -> tieuChi9_5 }}"  class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Tiêu chí 9.6</td>
                        <td><input type="number" min="0" max="1" name="tieuChi9.6" value="{{ $programs[0] -> tieuChi9_6 }}"  class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Tiêu chí 9.7</td>
                        <td><input type="number" min="0" max="1" name="tieuChi9.7" value="{{ $programs[0] -> tieuChi9_7 }}" class="form-control"></td>
                    </tr>

                    <tr>
                        <td>Tiêu chí 9.8</td>
                        <td><input type="number" min="0" max="1" name="tieuChi9.8" value="{{ $programs[0] -> tieuChi9_8 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 9.9</td>
                        <td><input type="number" min="0" max="1" name="tieuChi9.9" value="{{ $programs[0]-> tieuChi9_9 }}" class="form-control"></td>
                    </tr>
                    <tr>
                        <td rowspan="4" ><i>Tiêu chuẩn 10</i></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 10.1</td>
                        <td><input type="number" min="0" max="1" name="tieuChi10.1" value="{{ $programs[0] -> tieuChi10_1 }}"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 10.2</td>
                        <td><input type="number" min="0" max="1" name="tieuChi10.2" value="{{ $programs[0] -> tieuChi10_2 }}" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Tiêu chí 10.3</td>
                        <td><input type="number" min="0" max="1" name="tieuChi10.3" value="{{ $programs[0] -> tieuChi10_3 }}"  class="form-control"></td>
                    </tr>



                </tbody>
                </form>
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

