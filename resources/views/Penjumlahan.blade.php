@extends('greeting')

@section('content')
<form action="{{ route('action-Penjumlahan') }}" method="post">
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

    <h3>Hasil Penjumlahan : {{ $jumlah }}</h3>
@endsection
