@extends('layout.default')

@section('content')

<section>
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Transaksi Pasien</h4>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Pasien</th>
                                    <th>Tanggal</th>
                                    <th>Jenis Pelayanan</th>
                                    <th>Jenis Obat</th>
                                    <th>Total Biaya</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($transaksiPasien as $transaksi)
                                <tr>
                                    <td>{{ $transaksi->id }}</td>
                                    <td>{{ optional($transaksi->wilayah)->nama }}</td>
                                    <td>{{ optional($transaksi->tanggal)->format('d-m-Y') }}</td>
                                    <td>{{ optional($transaksi->data_tindakan)->nama_tindakan }}</td>
                                    <td>{{ optional($transaksi->data_obat)->nama_obat }}</td>
                                    <td>Rp {{ number_format($transaksi->total_biaya, 0, ',', '.') }}</td>
                                    <td>
                                        <a href="{{ route('transaksipasien.edit', $transaksi->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ route('transaksipasien.destroy', $transaksi->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center p-5">
                                        Data tidak tersedia
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
