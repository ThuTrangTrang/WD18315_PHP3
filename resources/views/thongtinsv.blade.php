<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sinh viên</title>
</head>
<body>
    <h1>Thông tin sinh viên</h1>
    <table border="1">
        <thead>
            <tr>
            <th>ID</th>
            <th>Họ và tên</th>
            <th>Mã sinh viên</th>
            <th>Số điện thoại</th>
        </thead>
        <tbody>
           
                @foreach($thongtinsv as $value)
                <tr>
                <td>{{ $value['id']}}</td>
                <td>{{ $value['name']}}</td>
                <td>{{ $value['msv']}}</td>
                <td>{{ $value['sdt']}}</td>
                </tr>
                @endforeach
                
        </tbody>
    </table>
</body>
</html>