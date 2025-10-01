<!DOCTYPE html>
<html>  
<head>
    <title>data user</title>
</head>
<body>
    <h1>data user</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>username</th>
            <th>password</th>
            <th>ID level pengguna</th>
            <th>nama </th>
        </tr>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->user_id }}</td>
            <td>{{ $d->user_nama }}</td>
            <td>{{ $d->user_username }}</td>
            <td>{{ $d->user_password }}</td>
            <td>{{ $d->level_id }}</td>
        </tr>
        @endforeach
    </table>
