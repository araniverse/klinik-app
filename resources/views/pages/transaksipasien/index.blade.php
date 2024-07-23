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
                                    <th>Total Biaya</th>
                                    <th>Jenis Tindakan</th> {{-- Kolom baru --}}
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($transaksiPasien as $transaksi)
                                <tr>
                                    <td>{{ $transaksi->id }}</td>
                                    <td>{{ $transaksi->pasien->nama }}</td>
                                    <td>{{ $transaksi->tanggal->format('d-m-Y') }}</td>
                                    <td>Rp {{ number_format($transaksi->total_biaya, 0, ',', '.') }}</td>
                                    <td>
                                        @foreach($transaksi->dataTindakan as $tindakan)
                                            {{ $tindakan->nama_tindakan }}
                                            @if (!$loop->last), @endif
                                        @endforeach
                                    </td> {{-- Menampilkan jenis tindakan --}}
                                    <td>
                                        <a href="{{ route('transaksi_pasien.edit', $transaksi->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ route('transaksi_pasien.destroy', $transaksi->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center p-5">
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
