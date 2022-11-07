<?php

namespace App\Http\Controllers;
use App\Models\UploadModel;
use App\Models\Jurusan;
use App\Models\Prodi;

class DashboardController extends Controller
{
    public function index()
    {

        $jurusan = Jurusan::all();
        $prodi = Prodi::all();
        $posts = UploadModel::query()->get()->paginate(10);

        return view('halaman-mahasiswa.dashboard-mahasiswa', compact('posts', 'jurusan', 'prodi'));
        
    }

    public function render (){

        // $posts = UploadModel::query()->where('status',0)->paginate(10);

        // // return view('halaman-mahasiswa.dashboard-mahasiswa', compact('posts'));
        
        // return view('halaman-mahasiswa.dashboard-mahasiswa',[
        //     'posts' => $posts,
        // ]);

        $posts = UploadModel::select('*')
        ->get();
        
        return redirect('/dashboard', ['posts' => $posts]);
    }
}
