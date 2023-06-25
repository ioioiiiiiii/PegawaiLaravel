<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tugas extends Model
{
    use HasFactory;
    protected $table = 'tugas';
    protected $fillable =[
        'jobdesk'
    ];

    public $timestamps = false;
    public function pegawai()
    {
        return $this->belongsToMany(pegawai::class,'tugas_pegawai','id_tugas','id_pegawai');
    }
}
