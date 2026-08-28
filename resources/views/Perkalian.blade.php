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
    <p>Materi Laravel - Perkalian</p>

    <form action="{{ route('action-Perkalian') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="angka1" class="form-label">Angka 1</label>
            <input type="number" name="angka1" placeholder="Masukkan Angka">
        </div>
        <div class="mb-3">
            <label for="angka1" class="form-label">Angka 2</label>
            <input type="number" name="angka2" placeholder="Masukkan Angka">
        </div>
        <button type="submit">Prosses</button>
    </form>

    <h3>Hasil Perkalian : {{ $jumlah }}</h3>
</body>

</html>
