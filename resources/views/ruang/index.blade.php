@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="card-tools">
                            <h1>Daftar Ruangan </h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Ruangan</th>
                                        <th>Nama Gedung</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($ruangs as $ruang)
                                        <tr>
                                            <th>{{ $no++ }}</th>
                                            <td>{{ $ruang->nama_ruang }}</td>
                                            <td>{{ $ruang->nama_gedung }}</td>
                                            <td>
                                                <a href="{{ route('ruang.edit', $ruang->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <form action="{{ route('ruang.destroy', $ruang->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete this')">Delete</button>
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
