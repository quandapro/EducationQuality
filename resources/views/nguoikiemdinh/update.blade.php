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
    <h1>Cập nhật thông tin</h1>
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
</body>

</html>
