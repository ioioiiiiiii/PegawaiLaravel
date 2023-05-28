<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    public $timestamps = false;

    public function jabatan()
    {
        return $this->belongsTo(jabatan::class,'id_jabatan','id');
    }
    public function perusahaan()
    {
        return $this->belongsTo(perusahaan::class,'id_perusahaan','id');
    }

    public function tugas()
    {
        return $this->belongsToMany(tugas::class,'tugas_pegawai','id_pegawai','id_tugas');
    }
}
