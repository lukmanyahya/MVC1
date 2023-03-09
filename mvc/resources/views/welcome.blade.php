<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table border = "10">
<tr>
    <th>Nama</th>
    <th>Kelamin</th>
</tr>
@foreach ($modelorang as $org)
<tr>
    <td>{{$org->nama}}</td>
    <td>{{$org->kelamin}}</td>
</tr>
@endforeach
</table>
<marquee><font size ="100" color="blue">Lukman Yahya Saputra</marquee>
<marquee direction="right"><font size ="100" color="red">Lukman Yahya Saputra</marquee>
</body>
</html>