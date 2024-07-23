@extends('layout.default')

@section('content')
<div class="card">
   <div class="card-header">
      <strong>Tambah Pegawai</strong>
   </div>
   <div class="card-body card-block">
      <form action="{{ route('pegawai.store') }}" method="POST">
         @csrf
         {{-- Nama --}}
         <div class="form-group">
            <label for="nama" class="form-control-label">Nama Pegawai</label>
            <input type="text" 
                   name="nama" 
                   id="nama" 
                   value="{{ old('nama') }}" 
                   class="form-control @error('nama') is-invalid @enderror">
            @error('nama') 
                <div class="text-muted">{{ $message }}</div> 
            @enderror
         </div>
         {{-- Email --}}
         <div class="form-group">
            <label for="email" class="form-control-label">Email</label>
            <input type="email" 
                   name="email" 
                   id="email" 
                   value="{{ old('email') }}" 
                   class="form-control @error('email') is-invalid @enderror">
            @error('email') 
                <div class="text-muted">{{ $message }}</div> 
            @enderror
         </div>
         {{-- No HP --}}
         <div class="form-group">
            <label for="no_hp" class="form-control-label">No HP</label>
            <input type="text" 
                   name="no_hp" 
                   id="no_hp" 
                   value="{{ old('no_hp') }}" 
                   class="form-control @error('no_hp') is-invalid @enderror">
            @error('no_hp') 
                <div class="text-muted">{{ $message }}</div> 
            @enderror
         </div>
         
         {{-- Button --}}
         <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
               Tambah Pegawai
            </button>
         </div>
      </form>
   </div>
</div>
@endsection()
