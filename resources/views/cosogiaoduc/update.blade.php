<!DOCTPE html>
<html>
<head>
    <title>Co so giao duc</title>
</head>
<body>
<form action = "/view_CSGD_update_programs/{{$programs[0] -> id_CSGD}}" method = "post">
    @csrf
    <div class="form-group">
        <label for="nameProgram">Tên chương trình:</label>
        <input value="{{$programs[0] -> ten_CSGD}}" type="text" class="form-control" id="name"  name="ten_CSGD">
    </div>

    <div class="form-group">
        <label for="Program">ngay kd:</label>
        <input value="{{$programs[0] -> ngay_kd}}" type="text" class="form-control" id="date"  name="ngay_kd">
    </div>

    <div class="form-group">
        <label for="nameCourse">ngay het han kd:</label>
        <input value="{{$programs[0] -> ngayHetHan_kd}}" type="text" class="form-control" id="status"  name="ngayHetHan_kd">
    </div>

    <div class="form-group">
        <label for="Program">thoi han:</label>
        <input value="{{$programs[0] -> thoiHan}}" type="text" class="form-control" id="date"  name="thoiHan">
    </div>

    <div class="form-group">
        <label for="Program">van ban kd:</label>
        <input value="{{$programs[0] -> vanBan_kd}}" type="text" class="form-control" id="date"  name="vanBan_kd">
    </div>

    <button type="submit" class="btn btn-primary">Them</button>
</form>
</body>
</html>
