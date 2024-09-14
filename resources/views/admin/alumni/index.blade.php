@extends('admin.layouts.main')

@section('menuDataAlumni', 'active')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Table Alumni</h4>
        
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th> No </th>
                <th> Nama Alumni </th>
                <th> Email </th>
                <th> Alamat </th>
                <th> Phone </th>
                <th> Status </th>
                <th> Aksi </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($alumnis as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->telepon }}</td>
                    <td>{{ $data->status }}</td>
        
                    <td>
                        <a href="{{ route('data-alumni.edit', $data->id) }}" class="btn btn-sm btn-succes" role="button">Approve</a>
                        <form action="{{ route('data-alumni.destroy', $data->id) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm my-2" onclick="return confirm('Anda yakin menghapus data ini?')">Decline</button>
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
@endsection
