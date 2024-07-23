@extends('layout.default')

@section('content')
<div class="card">
   <div class="card-header">
      <strong>Edit Data Obat</strong>
   </div>
   <div class="card-body card-block">
      <form action="{{ route('dataobat.update', $item->id) }}" method="POST">
         @method('PUT')
         @csrf

         {{-- Nama Obat --}}
         <div class="form-group">
            <label for="nama_obat" class="form-control-label">Nama Obat</label>
            <input type="text" name="nama_obat" id="nama_obat"
               value="{{ old('nama_obat') ? old('nama_obat') : $item->nama_obat }}"
               class="form-control @error('nama_obat') is-invalid @enderror">
            @error('nama_obat')
         <div class="text-muted">{{ $message }}</div> @enderror
         </div>

         {{-- Harga --}}
         <div class="form-group">
            <label for="harga" class="form-control-label">Harga</label>
            <div class="input-group">
               <div class="input-group-prepend">
                  <span class="input-group-text">Rp</span>
               </div>
               <input type="number" name="harga" id="harga" value="{{ old('harga') ? old('harga') : $item->harga }}"
                  class="form-control @error('harga') is-invalid @enderror">
            </div>
            @error('harga')
         <div class="text-muted">{{ $message }}</div> @enderror
         </div>


         {{-- Button --}}
         <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
               Edit
            </button>
         </div>
      </form>
   </div>
</div>
@endsection