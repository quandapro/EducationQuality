<!DOCTPE html>
<html>
<head>
    <title>Co so giao duc</title>
</head>
<body>
<table border = "1">
    <tr>
        <td>CSGD</td>
        <td>ngay kd</td>
        <td>ngay het han kd</td>
        <td>thoi han</td>
        <td>Action</td>
    </tr>
    @foreach ($programs as $program)
        <tr>
            <td>{{ $program->ten_CSGD }}</td>
            <td>{{ $program->ngay_kd }}</td>
            <td>{{ $program->ngayHetHan_kd }}</td>
            <td>{{ $program->thoiHan }}</td>
            <td><a href="/view_CSGD_show_programs/{{$program -> id_CSGD}}" id="create_course">sua</a></td>
            <td><a href="/view_CSGD_delete_programs/{{$program -> id_CSGD}}" id="create_course">xoa</a></td>
        </tr>
    @endforeach

</table>
<a href="/view_CSGD_create_programs" id="create_course">Thêm mới</a>
</body>
</html>
