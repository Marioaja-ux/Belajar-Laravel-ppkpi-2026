<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel</title>
</head>

<body>
    <h1>Selamat Datang di Kelas Junior Web Programming</h1>
    <p>Materi Laravel</p>

    <a href="{{ route('Penjumlahan') }}">Penjumlahan</a>
    <a href="{{ route('Pengurangan') }}">Pengurangan</a>
    <a href="{{ route('Pembagian') }}">Pembagian</a>
    <a href="{{ route('Perkalian') }}">Perkalian</a>

    @yield('content')
</body>

</html>
