@extends('layout.default')

@section('content')
<div class="card">
   <div class="card-header">
      <strong>Edit Pegawai</strong>
      <small>{{ $item->nama }}</small>
   </div>
   <div class="card-body card-block">
      <form action="{{ route('pegawai.update', $item->id) }}" method="POST">
         @method('PUT')
         @csrf
         {{-- Id --}}
         <div class="form-group">
            <label for="id_pegawai" class="form-control-label">Id Pegawai</label>
            <input type="text" 
                   name="id_pegawai" 
                   id="id_pegawai" 
                   value="{{ old('id_pegawai', $item->id) }}" 
                   class="form-control @error('id_pegawai') is-invalid @enderror" 
                   readonly>
            @error('id_pegawai') 
                <div class="text-muted">{{ $message }}</div> 
            @enderror
         </div>
         {{-- Name --}}
         <div class="form-group">
            <label for="nama" class="form-control-label">Nama Pegawai</label>
            <input type="text" 
                   name="nama" 
                   id="nama" 
                   value="{{ old('nama', $item->nama) }}" 
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
                   value="{{ old('email', $item->email) }}" 
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
                   value="{{ old('no_hp', $item->no_hp) }}" 
                   class="form-control @error('no_hp') is-invalid @enderror">
            @error('no_hp') 
                <div class="text-muted">{{ $message }}</div> 
            @enderror
         </div>
         {{-- Button --}}
         <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
               Edit Pegawai
            </button>
         </div>
      </form>
   </div>
</div>
@endsection()
