@extends ('layout')
@section ('content')
<h1>Tambah data karyawan</h1>
<form action = "/karyawan" method="post">
    @csrf
    <div class="form-group">
        <label for = "title">Status</label>
        <select name="jabatan" class="form-control">
            @foreach ($jabatan as $baris)
            <option value = "{{ $baris->nm_jabatan}}">{{ $baris->nm_jabatan }}</option>
            @endforeach
        </select>
    <div class = "form-group"> 
        <label for="title">Employee ID Number</label>
        <input type="number" class="form-control" name="id">
        @error ('id')
        <div class = "alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class = "form-group"> 
        <label for="title"> Name</label>
        <input type="text" class="form-control" name="nama">
        @error ('nama')
        <div class = "alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class = "form-group"> 
        <label for="title"> Age </label>
        <input type="text" class="form-control" name="umur">
        @error ('umur')
        <div class = "alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class = "form-group"> 
        <label for="title"> Adress</label>
        <input type="text" class="form-control" name="alamat">
        @error ('alamat')
        <div class = "alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class = "form-group"> 
        <label for="title">Handphone Number</label>
        <input type="text" class="form-control" name="nomor">
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
