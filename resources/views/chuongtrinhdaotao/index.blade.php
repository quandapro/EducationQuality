<!DOCTPE html>
<html>
<head>
    <title>Chuong trinh dao tao</title>
</head>
<body>
<table border = "1">
    <tr>
        <td>CTDT</td>
        <td>ngay kd</td>
        <td>ngay het han kd</td>
        <td>thoi han</td>
        <td>Action</td>
    </tr>
    @foreach ($programs as $program)
        <tr>
            <td>{{ $program->ten_CTDT }}</td>
            <td>{{ $program->ngay_kd }}</td>
            <td>{{ $program->ngayHetHan_kd }}</td>
            <td>{{ $program->thoiHan }}</td>
            <td><a href="/view_CTDT_show_programs/{{$program -> id_CTDT}}" id="create_course">sua</a></td>
            <td><a href="/view_CTDT_delete_programs/{{$program -> id_CTDT}}" id="create_course">xoa</a></td>
        </tr>
    @endforeach

</table>
<a href="/view_CTDT_create_programs" id="create_course">Thêm mới</a>
</body>
</html>
