@extends ('layout')
@section ('content')
{{-- <h1>daftar karyawan</h1> --}}
<a href ="/karyawan/create"><button type="button" class="btn btn-primary">Tambah data</button></a>
<table class = "table yable-bordered">
    <tr> 
        <td>Employee ID Number</td>
        <td>Name</td>
        <td>Age</td>
        <td>Adress</td>
        <td>Handphone Number</td>
        <td>Status</td>
    </tr>
    @foreach ($data_karyawan as $baris)
    <tr> 
        <td>{{$baris->id}} </td>
        <td>{{$baris->nama}} </td>
        <td>{{$baris->umur}} </td>
        <td>{{$baris->alamat}} </td>
        <td>{{$baris->nomor}} </td>
        <td>{{$baris->jabatan_id}} </td>
        <td>
            <a href ='/karyawan/{{ $baris->id }}/edit' class = 'btn btn-warning'>Edit </a>
            <form action = "/karyawan/{{ $baris ->id }}" method = "post"> 
            @csrf 
            @method ('delete')
            <button class ="btn btn-danger">Delete</button>
        </form> 
        </td>
    </tr>
    @endforeach
</table>
    
          
@endsection 