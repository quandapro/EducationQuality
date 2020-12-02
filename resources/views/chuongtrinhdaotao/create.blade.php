<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CTDT</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <style>

    </style>
</head>
<body>
<div class="container">
    <h1>Thêm chương trình Dao tao</h1>
    <form action = "/view_CTDT_store_programs" method = "post">
        @csrf
        <div class="form-group">
            <label for="nameProgram">Tên chương trình:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter the name" name="ten_CTDT">
        </div>

        <div class="form-group">
            <label for="Program">ngay kd:</label>
            <input type="text" class="form-control" id="date" placeholder="Enter the date" name="ngay_kd">
        </div>

        <div class="form-group">
            <label for="nameCourse">ngay het han kd:</label>
            <input type="text" class="form-control" id="status" placeholder="Enter name" name="ngayHetHan_kd">
        </div>

        <div class="form-group">
            <label for="Program">thoi han:</label>
            <input type="text" class="form-control" id="date" placeholder="Enter the date" name="thoiHan">
        </div>

        <div class="form-group">
            <label for="Program">van ban kd:</label>
            <input type="text" class="form-control" id="date" placeholder="Enter the date" name="vanBan_kd">
        </div>

        <button type="submit" class="btn btn-primary">Them</button>
    </form>
</div>
</body>
</html>
