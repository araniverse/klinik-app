@extends('layout.default')

@section('content')
<div class="card">
   <div class="card-header">
      <strong>Tambah Data Wilayah Pasien</strong>
   </div>
   <div class="card-body card-block">
      <form action="{{ route('wilayah.store') }}" method="POST">
         @csrf
         {{-- Nama --}}
         <div class="form-group">
            <label for="nama" class="form-control-label">Nama</label>
            <input type="text" 
            name="nama" 
            id="nama" 
            value="{{ old('nama') }}" 
            class="form-control @error('nama') is-invalid @enderror">
            @error('nama') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         {{-- Wilayah --}}
         <div class="form-group">
            <label for="wilayah" class="form-control-label">Wilayah</label>
            <input type="text" 
            name="wilayah" 
            id="wilayah" 
            value="{{ old('wilayah') }}" 
            class="form-control @error('wilayah') is-invalid @enderror">
            @error('wilayah') <div class="text-muted">{{ $message }}</div> @enderror
         </div>
         
         {{-- Button --}}
         <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
               Tambah
            </button>
         </div>
      </form>
   </div>
</div>
@endsection
