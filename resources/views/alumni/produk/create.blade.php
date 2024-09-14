{{-- resources/views/produks/create.blade.php --}}

@extends('admin.layouts.main')

@section('menuDataAlumniProduk', 'active')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Produk Baru</h4>
        
        {{-- Form untuk menambahkan produk baru --}}
        <form action="{{ route('data-produk.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          
          <div class="mb-3">
            <label for="nama">Nama Produk</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                id="nama" name="nama" value="{{ old('nama') }}" required>
            @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                id="gambar" name="gambar" value="{{ old('gambar') }}" required>
            @error('gambar')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

          <div class="form-group">
            <label for="kategori_id">Kategori Produk</label>
            <select class="form-control" id="kategori_id" name="kategori_id" required>
                <option value="" disabled selected>Pilih Kategori</option>
                @foreach($kategori as $data)
                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga_produk"
                class="form-control @error('harga_produk') is-invalid @enderror"
                value="{{ @old('harga_produk') }}">
            @error('harga_produk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Diskon</label>
            <input type="number" name="persen_diskon"
                class="form-control @error('persen_diskon') is-invalid @enderror"
                value="{{ @old('persen_diskon') }}">
            @error('persen_diskon')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Rating</label>
            <input type="number" name="rating"
                class="form-control @error('rating') is-invalid @enderror"
                value="{{ @old('rating') }}">
            @error('rating')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
          

          <button type="submit" class="btn btn-primary btn-rounded btn-fw"">
            Submit
        </button>
        <a href="{{ route('data-produk.index') }}" class="btn btn-light btn-rounded btn-fw"">Cencel</a>
        </form>
      </div>
    </div>
  </div>
@endsection
