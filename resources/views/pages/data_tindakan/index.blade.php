@extends('layout.default')

@section('content')

<section>
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Data Tindakan</h4>
                </div>
                <div class="card-body">
                    <div class="table-stats order-table ov-h">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Tindakan</th>
                                    <th>Deskripsi</th>
                                    <th>Biaya</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($dataTindakan as $tindakan)
                                <tr>
                                    <td>{{ $tindakan->id }}</td>
                                    <td>{{ $tindakan->nama_tindakan }}</td>
                                    <td>{{ $tindakan->deskripsi }}</td>
                                    <td>Rp {{ number_format($tindakan->biaya, 0, ',', '.') }}</td>
                                    <td>
                                        <a href="{{ route('datatindakan.edit', $tindakan->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ route('datatindakan.destroy', $tindakan->id) }}" method="post" class="d-inline">
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
                                    <td colspan="5" class="text-center p-5">
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
