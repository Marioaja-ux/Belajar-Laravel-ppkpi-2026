@extends('app')
@section('content')
    <div class="card mt-4">
        <div class="card-header">
            {{ $title ?? '' }}
        </div>
        <div class="card-body">
            <form action="{{ route('product.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label fw-semibold">Nama</label>
                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                        name="name" required value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label fw-semibold">Category</label>
                    <select id="category_id" name="category_id"
                        class="form-select @error('category_id') is-invalid @enderror" required>
                        <option value="">Pilih category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label fw-semibold">Price</label>
                    <input type="number" id="price" class="form-control @error('price') is-invalid @enderror"
                        name="price" min="0" step="0.01" required value="{{ old('price') }}">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label fw-semibold">Description</label>
                    <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description"
                        rows="4" required>{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('product.index') }}" class="btn btn-link">Kembali</a>
            </form>
        </div>
    </div>
@endsection
