@extends('admin.layouts.main')

@section('menuDataAlumniProduk', 'active')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Table Produk</h4>
        
        <div class="card-body">
          <a href="{{ route('data-produk.create') }}" class="btn btn-primary btn-rounded btn-fw">
              <i class="mdi mdi-account-plus"></i>
              Tambahkan Data Produk
          </a>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th> No </th>
                  <th> Nama Produk </th>
                  <th> Gambar </th>
                  <th> Kategori  </th>
                  <th> Harga </th>
                  <th> Diskon </th>
                  <th> Rating </th>
                  <th> Aksi </th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($produks as $data)
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $data->nama }}</td>
                      <td><img src="{{ asset('images/produk/' . $data->gambar) }}" style="height: 70px; width: 70px;"></td>
                      <td>{{ $data->kategori->nama ?? '' }}</td>
                      <td>Rp. {{ number_format($data->harga_produk, 0, ',', '.') }}</td>
                      <td>{{ $data->persen_diskon ?? 0 }}%</td>
                      <td>{{ $data->rating ?? 'Belum ada rating' }}</td>
                      <td>
                          <a href="{{ route('data-produk.edit', $data->id) }}" class="btn btn-sm btn-warning" role="button">Edit</a>
                          <form action="{{ route('data-produk.destroy', $data->id) }}" method="POST" class="d-inline">
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
