<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Jabatan;
use Illuminate\Http\Request;



class KaryawanController extends Controller
{
  
    public function index()
    {
        $karyawan = Karyawan::all();
        return view ('karyawan.daftarData', ['data_karyawan'=>$karyawan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = Jabatan::all();
        return view ('karyawan.tambahData',['jabatan'=>$jabatan]);
    }
 public function store(Request $request)
    {
        $this->validate($request,[
            'id' => 'required', 
            'nama'=> 'required|min:5|max:20',
            'umur'=>'required|integer|min:20',
            'alamat'=> 'required|min:10|max:40',
            'nomor'=> ['required', 'regex:/^08[0-9]{8,11}$/']
        ]);
        
        $karyawan = new Karyawan;
        $karyawan->jabatan_id = $request->jabatan;
        $karyawan->nama = $request->nama;
        $karyawan->id = $request->id;
        $karyawan->umur = $request->umur;
        $karyawan->alamat = $request->alamat;
        $karyawan->nomor = $request->nomor;    
        $karyawan->save();
        
        return redirect ('/karyawan');
    }
 
     






























    public function show($id)
    {
        //
    }

    public function edit($id)
    {
         $karyawan = Karyawan :: find ($id); 
         $jabatan = Jabatan::all();
         return view ('/karyawan.editData', compact(('karyawan'),('jabatan') ));
          
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama'=> 'required|min:5|max:20',
            'umur'=>'required|integer|min:20',
            'alamat'=> 'required|min:10|max:40',
            'nomor'=> ['required', 'regex:/^08[0-9]{8,11}$/']
        ]);
        
        $karyawan =Karyawan::find($id);
        $karyawan->jabatan_id = $request->jabatan;
        // $karyawan->id = $request->id;
        $karyawan->nama = $request->nama;
        $karyawan->umur = $request->umur;
        $karyawan->alamat = $request->alamat;
        $karyawan->nomor = $request->nomor;    
        $karyawan->save();
        
        return redirect ('/karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Karyawan::find ($id) -> delete();
        return redirect ('/karyawan');
    }
}
