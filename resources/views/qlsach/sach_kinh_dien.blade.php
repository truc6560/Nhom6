<html>
<head>
</head>
<body>
    <table border=1 style="border-collapse: collapse">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên sách</th>
            <th>Nhà xuất bản</th>
            <th>Tác giả</th>
            <th>Giá bán</th>
            <th>Hình ảnh</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sach_kinh_dien as $key => $row)
        <tr>
            <td>{{ $key + 1 }}</td> 
            <td>{{ $row->tieu_de }}</td>
            <td>{{ $row->nha_xuat_ban }}</td>
            <td>{{ $row->tac_gia }}</td>
            <td>{{ $row->gia_ban }}</td>
            <td>
                <img src="{{ asset('image/' . $row->file_anh_bia) }}" width="100px" alt="Hình sách">
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
