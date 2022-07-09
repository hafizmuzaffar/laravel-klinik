@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="card-tools">
                            <h1>Obat</h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Obat</th>
                                        <th>Kategori Obat</th>
                                        <th>Stock Obat</th>
                                        <th>Harga Obat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($obats as $obat)
                                        <tr>
                                            <th>{{ $no++ }}</th>
                                            <td>{{ $obat->nama_obat }}</td>
                                            <td>{{ $obat->kategori_obat }}</td>
                                            <td>{{ $obat->jumlah_obat }}</td>
                                            <td>{{ $obat->harga }}</td>
                                            <td>
                                                <a href="{{ route('obat.edit', $obat->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <form action="{{ route('obat.destroy', $obat->id) }}" method="POST"
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
