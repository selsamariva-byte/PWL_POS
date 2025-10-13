<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data User</title> 
     <form method="post" action="/user/simpan">
        
        {{ csrf_field() }}
        <label>Username</label>
        <input type="text" name="username" placeholder="masukkan username">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="masukkan nama">
         <br>
        <label>Password</label>
        <input type="text" name="password" placeholder="masukkan password">
        <br>
        <label>level ID </label>
        <input type="number" name="level_id" placeholder="masukkan ID">
        <br><br>
        <input type="submit" class="btn btn-success" value="simpan data">
    </form>
</body>
</html>

       


    