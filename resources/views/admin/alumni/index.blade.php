@extends('admin.layouts.main')

@section('menuDataAlumni', 'active')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="row">
        <div class="col-lg">
            <div class="card">
                <div class="card-header">
                    Data Alumni
                </div>
                <div class="card-body">
                    {{-- <a href="{{ route('data-alumni.create') }}" class="btn btn-success mb-3">
                        <i class="fas fa-plus"></i>
                        Tambahkan Data Dokter
                    </a> --}}
                    <div class="table-responsive">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                <th>No</th>
                                <th>Nama Alumni</th>
                                <th>Phone</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Aksi</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alumnis as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->telepon }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>{{ $data->status }}</td>
                        
                                    {{-- <td>
                                        <a href="{{ route('data-dokter.edit', $data->id) }}" class="btn btn-sm btn-warning" role="button">Edit</a>
                                        <form action="{{ route('data-dokter.destroy', $data->id) }}" method="POST" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm my-2" onclick="return confirm('Anda yakin menghapus data ini?')">Hapus</button>
                                        </form>
                                    </td> --}}
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