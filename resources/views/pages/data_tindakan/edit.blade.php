@extends('layout.default')

@section('content')
<div class="card">
   <div class="card-header">
      <strong>Edit Data Tindakan</strong>
   </div>
   <div class="card-body card-block">
      <form action="{{ route('datatindakan.update', $item->id) }}" method="POST">
         @method('PUT')
         @csrf

         {{-- Nama Tindakan --}}
         <div class="form-group">
            <label for="nama_tindakan" class="form-control-label">Nama Tindakan</label>
            <input type="text" name="nama_tindakan" id="nama_tindakan"
               value="{{ old('nama_tindakan') ? old('nama_tindakan') : $item->nama_tindakan }}"
               class="form-control @error('nama_tindakan') is-invalid @enderror">
            @error('nama_tindakan')
               <div class="text-muted">{{ $message }}</div>
            @enderror
         </div>

         {{-- Deskripsi --}}
         <div class="form-group">
            <label for="deskripsi" class="form-control-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="3"
               class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') ? old('deskripsi') : $item->deskripsi }}</textarea>
            @error('deskripsi')
               <div class="text-muted">{{ $message }}</div>
            @enderror
         </div>

         {{-- Biaya --}}
         <div class="form-group">
            <label for="biaya" class="form-control-label">Biaya</label>
            <div class="input-group">
               <div class="input-group-prepend">
                  <span class="input-group-text">Rp</span>
               </div>
               <input type="number" name="biaya" id="biaya" value="{{ old('biaya') ? old('biaya') : $item->biaya }}"
                  class="form-control @error('biaya') is-invalid @enderror">
            </div>
            @error('biaya')
               <div class="text-muted">{{ $message }}</div>
            @enderror
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
