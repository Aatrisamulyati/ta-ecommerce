@extends('admin.layouts.main')

@section('menuDataAlumniKategori', 'active')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Table Kategori</h4>
        
        <div class="card-body">
          <a href="{{ route('data-kategori.create') }}" class="btn btn-primary btn-rounded btn-fw">
              <i class="mdi mdi-account-plus"></i>
              Tambahkan Data Kategori
          </a>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th> No </th>
                  <th> Kategori </th>
                  <th> Deskripsi </th>
                  <th> Aksi </th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($kategoris as $data)
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $data->nama }}</td>
                      <td>{{ $data->deskripsi }}</td>
                      <td>
                          <a href="{{ route('data-kategori.edit', $data->id) }}" class="btn btn-sm btn-warning" role="button">Edit</a>
                          <form action="{{ route('data-kategori.destroy', $data->id) }}" method="POST" class="d-inline">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm my-2" onclick="return confirm('Anda yakin menghapus data ini?')">Hapus</button>
                          </form>
                      </td>
                  </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
