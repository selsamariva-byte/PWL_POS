<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
</head>
<body>
    <h1>Data User</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>User ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>ID level </th>
        </tr>
        <tr>
            <td>{{ $data->user_id}}</td>
            <td>{{ $data->usename}}</td>
            <td>{{ $data->nama}}</td>
            <td>{{ $data->level_id}}</td>
        </tr>
       
    </table>
</body>
</html>
