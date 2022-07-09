<table class="table table-bordered">
    <tr>
        <th>Nama</th>
        <td>{{ $item->name }}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{ $item->email }}</td>
    </tr>
    <tr>
        <th>Nomor</th>
        <td>{{ $item->number }}</td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td>{{ $item->address }}</td>
    </tr>
    <tr>
        <th>Total Transaksi</th>
        <td>{{ $item->transaction_total }}</td>
    </tr>
    <tr>
        <th>Status Transaksi</th>
        <td>{{ $item->transaction_status }}</td>
    </tr>
    {{-- <tr>
        <th>Data Pasien</th>
        <td>
            <table class="tabble table-bordered w-100">
                <tr>
                    <th>Nama Pasien</th>
                    <th>Ruangan</th>
                    <th>Jenis Pembayaran</th>
                    <th>Harga</th>
                </tr>
                @foreach ($item->details as $detail)
                    <tr>
                        <td>{{ $detail->tindakan->kd_pasien }}</td>
                        <td>{{ $detail->tindakan->kd_ruang }}</td>
                        <td>{{ $detail->tindakan->jenis_pembayaran }}</td>
                        <td>${{ $detail->tindakan->price }}</td>
                    </tr>
                @endforeach
            </table>
        </td>
    </tr> --}}
</table>
<div class="row">
    <div class="col-4">
        <a href="{{ route('transactions.status', $item->id) }}?status=SUCCESS" class="btn btn-success btn-block">
            <i class="fa fa-check"></i> Set Sukses
        </a>
    </div>
    <div class="col-4">
        <a href="{{ route('transactions.status', $item->id) }}?status=FAILED" class="btn btn-warning btn-block">
            <i class="fa fa-times"></i> Set Gagal
        </a>
    </div>
    <div class="col-4">
        <a href="{{ route('transactions.status', $item->id) }}?status=PENDING" class="btn btn-info btn-block">
            <i class="fa fa-spinner"></i> Set Pending
        </a>
    </div>
</div>
