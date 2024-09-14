@extends('admin.layouts.main')

@section('menuDataAlumniKategori', 'active')
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <form action="{{ route('data-kategori.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="card-body">
                <h4 class="card-title">Tambah Data Kategori</h4>
                
                <form class="forms-sample">
                <div class="form-group">
                    <label for="nama">Nama Kategori</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                        id="nama" name="nama" value="{{ old('nama') }}" required>
                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror"
                        id="deskripsi" name="deskripsi" value="{{ old('deskripsi') }}" required>
                        @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>

                
                    <button type="submit" class="btn btn-primary btn-rounded btn-fw"">
                        Submit
                    </button>
                    <a href="{{ route('data-kategori.index') }}" class="btn btn-light btn-rounded btn-fw"">Cencel</a>
            

                {{-- <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-light" href="{{ route('data-kategori.index') }}">Cancel</button> --}}
                
            </div>
        </form>
    </div>
</div>
@endsection