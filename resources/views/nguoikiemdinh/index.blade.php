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
    <h1>Danh sách người kiểm định</h1>
    <table class="table table-dark">
    <thead>
        <tr>
        <th scope="col">Mã số</th>
        <th scope="col">Họ tên</th>
        <th scope="col">Ngày sinh</th>
        <th scope="col">Quê quán</th>
        <th scope="col">Đơn vị kiểm định</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    @foreach ($inspections as $inspection)
        <tr>
        <td>{{ $inspection->id_nguoiKD }}</td>
        <td>{{ $inspection->full_name }}</td>
        <td>{{ $inspection->ngaySinh }}</td>
        <td>{{ $inspection->queQuan }}</td>
        <td>{{ $inspection->id_DVKD }}</td>
        <td>
            <a href="/update-inspection/{{ $inspection->id_nguoiKD }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Sửa</a>
            <a href="/destroy-inspection/{{ $inspection->id_nguoiKD }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Xóa</a>
        </td>
        </tr>
    @endforeach
    </tbody>
    </table>
    <button type="button" class="btn btn-success">Thêm mới</button>
</body>

</html>
