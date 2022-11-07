<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadModel extends Model

{
    use HasFactory; 

    protected $table = "upload_pengajuan";
    protected $fillable =[
        'id',
        'nama',
        'email',
        'nim_berkas',
        'kelas',
        'jurusan',
        'prodi',
        'alamat',
        'kota',
        'kodepos',
        'ayah',
        'kerja_ayah',
        'telp_ayah',
        'ibu',
        'kerja_ibu',
        'telp_ibu',
        'berkas',
        'foto',
        'created_at'
    ];

}
