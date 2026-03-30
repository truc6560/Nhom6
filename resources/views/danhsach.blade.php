<!DOCTYPE html>
<html lang="vi">
<style>
		table {
                border-collapse: collapse;
                width: auto;
                margin: 20px auto;
                
            }
            th, td {
                border: 1px solid #000;
                padding: 8px 12px;
                
            }
            th {
                background-color: #f2f2f2;
            }
	</style>
<body>
    <div class="container mt-4">
        <h2 class="mb-3 text-center">Danh sách Thể loại</h2>
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Thể loại tiếng Anh</th>
                    <th scope="col">Thể loại tiếng Việt</th>
                </tr>
            </thead>
            <tbody>
                @foreach($TL as $key => $row)
                <tr>
                    <td>{{ $row->genre_name }}</td>
                    <td>{{ $row->genre_name_vn }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>