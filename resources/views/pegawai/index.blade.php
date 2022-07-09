@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="card-tools">
                            <a href="{{ route('pegawai.create') }}" class="btn btn-primary">Tambah Petugas</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Petugas</th>
                                        <th>Alamat</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($pegawais as $pegawai)
                                        <tr>
                                            <th>{{ $no++ }}</th>
                                            <td>{{ $pegawai->nama_pegawai }}</td>
                                            <td>{{ $pegawai->alamat }}</td>
                                            <td>{{ $pegawai->created_at }}</td>
                                            <td>{{ $pegawai->updated_at }}</td>
                                            <td>
                                                <a href="{{ route('pegawai.edit', $pegawai->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
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
    </div>
@endsection
