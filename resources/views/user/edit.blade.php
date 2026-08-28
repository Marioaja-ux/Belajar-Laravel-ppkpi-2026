@extends('app')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ $title ?? '' }}
        </div>
        <div class="card-body">
            <form action="{{ route('user.update', $edit->id) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="name" class="form-label fw-semibold">Nama</label>
                    <input type="text" class="form-control" @error('name') is-invalid
                 @enderror
                        name="name" required value="{{ $edit->name }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label fw-semibold">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $edit->email }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label fw-semibold">Password</label>
                    <input type="password" class="form-control" name="password">
                    <small class="text-muted">Kosongkan jika tidak ingin diubah</small>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Simpan perubahan</button>
                <a href="{{ url()->previous() }}" class="text-muted">Kembali</a>
            </form>
        </div>
    </div>
@endsection
