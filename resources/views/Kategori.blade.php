<!DOCTYPE html>
<html>
   <head>
     <title>data kategori barang</title>
</head>
<body>
    <h1>data kategori barang</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>kode  kategori</th>
            <th>nama kategori</th>
        </tr>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->kategori_id }}</td>
            <td>{{ $d->kategori_kode }}</td>
            <td>{{ $d->kategori_nama }}</td>
        </tr>
        @endforeach
    
</body>
</html>