<?php

namespace App\Http\Controllers;

use App\Models\UploadModel;
use App\Models\Jurusan;
use App\Models\Prodi;
use App\Models\RegisModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UploadBerkasController extends Controller
{

    public function render (){
        $datadiri = RegisModel::all();
        $jurusan = Jurusan::all();
        $prodi = Prodi::all();
        return view('halaman-mahasiswa.upload-pengajuan', compact('datadiri','jurusan', 'prodi'));
    }


    public function index($id)
    {

        $jurusan = Jurusan::all();
        $prodi = Prodi::all();
        $posts = DB::table('upload_pengajuan')->where('id',$id)->get();
	    // passing data pegawai yang didapat ke view edit.blade.php
	    return view('halaman-mahasiswa.dashboard-mahasiswa',['posts' => $posts], compact('jurusan', 'prodi'));   }


    public function store(Request $request)
    {

        $this->validate($request,[
            'nama' => 'required',
            'email' => 'required',
            'nim_berkas' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'prodi' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'kodepos' => 'required',
            'ayah' => 'required',
            'kerja_ayah' => 'required',
            'telp_ayah' => 'required',
            'ibu' => 'required',
            'kerja_ibu' => 'required',
            'telp_ibu' => 'required',
            'berkas' => 'mimes:pdf',
        ]);

        $berkas = $request->file('berkas');
        $nama_berkas = "FT".date('Ymdhis').'.'.$request->file('berkas')->getClientOriginalExtension();
        $berkas->move('uploads/dokumen', $nama_berkas);
        
        $upload = new UploadModel();

        //data diri
        $upload->nama = $request-> input('nama');
        $upload->email = $request-> input('email');
        $upload->nim_berkas = $request-> input('nim_berkas');
        $upload->kelas = $request-> input('kelas');
        $upload->jurusan = $request-> input('jurusan');
        $upload->prodi = $request-> input('prodi');
        $upload->alamat = $request-> input('alamat');
        $upload->kota = $request-> input('kota');
        $upload->kodepos = $request-> input('kodepos');

        //data ortu
        $upload->ayah = $request-> input('ayah');
        $upload->kerja_ayah = $request-> input('kerja_ayah');
        $upload->telp_ayah = $request-> input('telp_ayah');
        $upload->ibu = $request-> input('ibu');
        $upload->kerja_ibu = $request-> input('kerja_ibu');
        $upload->telp_ibu = $request-> input('telp_ibu');

        //file pdf
        $upload->berkas = $nama_berkas;

        if($request-> hasFile('foto')){
            $file = $request->file('foto');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/foto',$filename);
            $upload->foto = $filename;
        }
        
        $upload->save();
        return redirect('/render-dashboard')->back()->with('berhasil', 'Berhasil Menyimpan Berkas');
    }


    public function edit($id){
        $berkas = DB::table('upload_pengajuan')->where('id',$id)->get();
        return view('halaman-mahasiswa.edit-pengajuan',['berkas' => $berkas]);
    }

    public function update(Request $request){
        DB::table('upload_pengajuan')->where('id',$request->id)->update([
            'nama'  => $request->nama,
            'email' => $request->email,
            'nim_berkas'=> $request->nim_berkas,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'prodi'=> $request->prodi,
            'alamat'=> $request->alamat,
            'kota' => $request->kota,
            'kodepos' => $request->kodepos,
            'ayah' => $request->ayah,
            'kerja_ayah' => $request->kerja_ayah,
            'telp_ayah' => $request->telp_ayah,
            'ibu' => $request->ibu,
            'kerja_ibu' => $request->kerja_ibu,
            'telp_ibu' => $request->telp_ibu,
            'berkas'=> $request->berkas,
            'foto' => $request->foto,
                
        ]);

        return view('halaman-mahasiswa.dashboard-mahasiswa')->with('succes','Data Berhasil diupdate');
    }
}
