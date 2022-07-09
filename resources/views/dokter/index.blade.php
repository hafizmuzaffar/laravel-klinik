@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="card-tools">
                            <a href="{{ route('dokter.create') }}" class="btn btn-primary">Entry Dokter</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Dokter</th>
                                        <th>Alamat</th>
                                        <th>Spesialis</th>
                                        <th>Created At</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($dokters as $dokter)
                                        <tr>
                                            <th>{{ $no++ }}</th>
                                            <td>{{ $dokter->nama_dokter }}</td>
                                            <td>{{ $dokter->alamat }}</td>
                                            <td>{{ $dokter->spesialis_dokter }}</td>
                                            <td>{{ $dokter->created_at }}</td>
                                            <td>
                                                <a href="{{ route('dokter.edit', $dokter->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form action="{{ route('dokter.destroy', $dokter->id) }}" method="post"
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
