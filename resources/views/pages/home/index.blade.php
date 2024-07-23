@extends('layout.default')

@section('content')
<div class="container">
    <div class="row">
        <!-- Card Jumlah Pegawai -->
        <div class="col-md-3">
            <a href="{{ route('pegawai.index') }}" class="text-decoration-none">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Jumlah Pegawai</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $jumlahPegawai }}</h5>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card Jumlah Pasien -->
        <div class="col-md-3">
            <a href="{{ route('wilayah.index') }}" class="text-decoration-none">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Jumlah Pasien</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $jumlahPasien }}</h5>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card Jumlah Obat -->
        <div class="col-md-3">
            <a href="{{ route('dataobat.index') }}" class="text-decoration-none">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">Jumlah Obat</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $jumlahObat }}</h5>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card Jumlah Tindakan -->
        <div class="col-md-3">
            <a href="{{ route('datatindakan.index') }}" class="text-decoration-none">
                <div class="card text-white bg-info mb-3">
                    <div class="card-header">Jumlah Tindakan</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $jumlahTindakan }}</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
