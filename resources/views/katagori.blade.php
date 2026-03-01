<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Katagori Barang</title>
</head>
<body>
    <h1>Data Katagori Barang</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <td>ID</td>
            <td>Kode Katagori</td>
            <td>Nama Katagori</td>
        </tr>
        @foreach ($data as $dt )
        <tr>
            <td>{{ $dt->katagori_id }}</td>
            <td>{{ $dt->katagori_kode }}</td>
            <td>{{ $dt->katagori_nama }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>