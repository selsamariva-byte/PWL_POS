<!DOCTYPE html>
<html>
<head>
    <h1>from ubah data user</h1>
    <a href="/user">kembali</a>
    <br><br>

    <form method="post" action="/user/ubah_simpan/{{ $data->user_id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <label>Username</label>
        <input type="text" name="username" placeholder="masukkan data" value="{{ $data->username }}">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="masukkan nama" value="{{ $data->nama }}">
         <br>
        <label>Password</label>
        <input type="text" name="password" placeholder="masukkan password" value="{{ $data->password }}">
        <br>
        <label>level ID </label>
        <input type="number" name="level_id" placeholder="masukkan level ID" value="{{ $data->level_id }}">
        <br><br>
        <input type="submit" class="btn btn-success" value="ubah">
    </form>
</head>
<body>
</html>