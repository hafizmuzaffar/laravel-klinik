@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="card-tools">
                            <a href="{{ route('tindakan.create') }}" class="btn btn-primary">Tambah Penanganan</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nama Ruang</th>
                                        <th>Tipe Bayar</th>
                                        <th>Obat</th>
                                        <th>Jumlah Obat</th>
                                        <th>Total</th>
                                        <th>Aksi</th>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($tindakans as $tindakan)
                                        <tr>
                                            <th>{{ $no++ }}</th>
                                            <td>{{ $tindakan->pasien->nama_pasien }}</td>
                                            <td>{{ $tindakan->ruang->nama_ruang }}-{{ $tindakan->ruang->nama_gedung }}
                                            </td>
                                            <td>{{ $tindakan->jenis_pembayaran }}</td>
                                            <td>{{ $tindakan->obat->nama_obat }}</td>
                                            <td>{{ $tindakan->jumlah_obat }}</td>
                                            <td>{{ $tindakan->jumlah_pembayaran }}</td>
                                            <td>
                                                <a href="#mymodal"
                                                    data-remote="{{ route('tindakan.show', $tindakan->id) }}"
                                                    data-toggle="modal" data-target="#modalTindakan"
                                                    class="btn btn-info btn-sm">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <form action="{{ route('tindakan.destroy', $tindakan->id) }}"
                                                    method="post" class="d-inline">
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

<div class="modal" id="modalTindakan" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <i class="fa fa-spinner fa-spin"></i>
            </div>
        </div>
    </div>
</div>
