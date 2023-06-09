<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nip',
        'id_perusahaan',
        'id_jabatan',
    ];
    protected $table = 'pegawai';
    public $timestamps = false;
    
    
    public function perusahaan()
    {
        return $this->belongsTo(perusahaan::class,'id_perusahaan','id');
    }
    public function jabatan()
    {
        return $this->belongsTo(jabatan::class,'id_jabatan','id');
    }
    public function userr()
    {
        return $this->hasOne(userr::class,'id','id_pegawai');
    }
    
    public function tugas()
    {
        return $this->belongsToMany(tugas::class,'tugas_pegawai','id_pegawai','id_tugas');
    }
}
