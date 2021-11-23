<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <table>
        <tr>
            <td><a href="{{ route('tmbh') }}"> Tambah</a></td>
        </tr>
        <tr>
            <td><a href="{{ route('krg') }}"> Kurang</a></td>
        </tr>
        <tr>
            <td><a href="{{ route('kali') }}"> Perkalian</a></td>
        </tr>
        <tr>
            <td><a href="{{ route('bagi') }}"> Pembagian</a></td>
        </tr>
        <tr>
            <td><a href="{{ route('div') }}"> Division</a></td>
        </tr>
        <tr>
            <td><a href="{{ route('mod') }}"> Modulus</a></td>
        </tr>
    </table>
</body>
</html>