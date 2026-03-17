<html>
    <head>
        <style>
            .table{
                border: 1px solid #cecece;
                border-collapse: collapse;
                width: 100%;
    
            }
            .table th, .table td {
                border: 1px solid black;
                padding: 8px; 
                text-align: left; 
            }    
        </style>
    </head>
    <body>
        <h1>Danh sách bộ phim có doanh thu cao nhất</h1>
        <table class="table">
            <tr>
                <th>Tên bộ phim</th>
                <th>Ngày phát hành</th>
                <th>Doanh thu</th>
            </tr>
            @foreach ($movies as $movie)
            <tr>
                <td>{{$movie->movie_name}}</td>
                <td>{{$movie->release_date}}</td>
                <td>{{number_format($movie->revenue,0, ',', '.')}} vnđ</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>