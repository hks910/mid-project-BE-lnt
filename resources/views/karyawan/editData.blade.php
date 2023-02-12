@extends ('layout')
@section ('content')

<h1>Edit Data Karyawan </h1>
 <form action="/karyawan/{{ $karyawan->id }}" method="post"> 
    {{-- <form action = "/karyawan" method="post"> --}}
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for = "title">Status</label>
            <select name="jabatan" class="form-control">
                @foreach ($jabatan as $baris)
                <option value = "{{ $baris->nm_jabatan}}">{{ $baris->nm_jabatan }}</option>
                @endforeach
            </select> 
        {{-- <div class = "form-group"> 
            <label for="title"> ID</label>
            <input type="number" class="form-control" name="id"value = "{{ old('id') ? old('id'): $karyawan->id }}">
        </div> --}}
        <div class = "form-group"> 
            <label for="title"> nama</label>
            <input type="text" class="form-control" name="nama" value = "{{ old('nama') ? old('nama'): $karyawan->nama }}">
            @error ('nama')
            <div class = "alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class = "form-group"> 
            <label for="title"> umur</label>
            <input type="text" class="form-control" name="umur" value = "{{ old('umur') ? old('umur'): $karyawan->umur }}">
            @error ('umur')
            <div class = "alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class = "form-group"> 
            <label for="title"> alamat</label>
            <input type="text" class="form-control" name="alamat" value = "{{ old('alamat') ? old('alamat'): $karyawan->alamat }}">
            @error ('alamat')
            <div class = "alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class = "form-group"> 
            <label for="title"> nomor</label>
            <input type="text" class="form-control" name="nomor" value = "{{ old('nomor') ? old('nomor'): $karyawan->nomor }}">
            @error ('nomor')
            <div class = "alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <a href="/karyawan"> 
            <button type = "button" class="btn btn-warning">kembali</button>
        </a>
        <button type ="submit" class = "btn btn-primary">Simpan</button>
    </form>
@endsection









