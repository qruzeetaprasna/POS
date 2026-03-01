<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
</head>
<body>
    <h1>Data User</h1>
    <table border="1" callpadding="2" cellspacing="0">
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Nama</td>
            <td>ID Level Pengguna</td>
        </tr>
        @foreach ($data as $dt )
        <tr>
            <td>{{ $dt->user_id }}</td>
            <td>{{ $dt->username }}</td>
            <td>{{ $dt->nama }}</td>
            <td>{{ $dt->level_id }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>