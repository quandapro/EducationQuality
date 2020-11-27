<!DOCTYPE html>
<html lang="en">

<head>
    <title>Giới thiệu</title>
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

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Giới thiệu <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="welcome">Sự kiện</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kết quả KDCLGD
                              </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Kiểm định các cấp</a>
                                        <a class="dropdown-item" href="#">Kiểm định chương trình đào tạo</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="page_quaility">Kiểm định chứng chỉ</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Liên hệ</a>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0" action="page_quaility_item">
                                <input class="form-control mr-sm-2" type="search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                            </form>
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
                <h3>Giới thiệu</h3>
            </div>
            <div class="row col-md-10 introduce">
                <!-- <embed id="intro_view_pdf" src="http://cea.vnuhcm.edu.vn/images/upload/website-1/Ket-qua-KDCLGD/Nghi-quyet-Hoi-dong/NQ-DHKHXHNV-DHQGHN.pdf" type="application/pdf"> -->
                <p class="intro_title">Trang web được xây dựng với mục đích lưu trữ, truy xuất các thông tin liên quan đến kiếm định chất lượng giáo dục đối với các cơ sở giáo dục và chương trình đào tạo
                </p>
                <p>Kiểm định chất lượng giáo dục là một trong những hoạt động đảm bảo chất lượng bên ngoài cơ sở đào tạo. Quá trình kiểm định chất lượng giáo dục nhằm mục tiêu đưa ra các quyết định công nhận về mức độ tiến bộ và đảm bảo chất lượng giáo dục
                    tại các trường cao đẳng, đại học… Kiểm định chất lượng giáo dục đã có một lịch sử phát triển lâu dài ở Hoa Kỳ và Bắc Mỹ, nhưng trước đây ít được các nước khác biết đến. Hiện nay kiểm định chất lượng giáo dục ngày càng trở nên phổ biến
                    hơn bởi nó chứng tỏ là một công cụ hữu hiệu giúp nhiều quốc gia trên thế giới, trong đó có Việt Nam, duy trì các chuẩn mực chất lượng giáo dục và không ngừng nâng cao chất lượng dạy và học.
                </p>
                <img src="./images/intro_img.jpg" alt="" class="intro_img">
                <p>Với nhiệm vụ và vai trò vô cùng quan trọng, trung tâm quản lý kết quả kiểm định chất lượng giáo dục đã được Đảng, Nhà nước đặt sự quan tâm lớn để phát triển phục vụ giáo dục</p>
                <p>Cùng với sự lớn mạnh của công nghệ hóa, hiện đại hóa trong thời kì cách mạng 4.0, chúng tôi đã phát triển trang web quản lý kết quả kiểm định chất lượng giáo dục để lưu trữ thông tin dưới dạng công nghệ cao, để dễ dàng quản lý cũng như
                    tra cứu.</p>
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
