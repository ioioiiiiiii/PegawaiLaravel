<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    use HasFactory;
    protected $table = 'jabatan';
    public $timestamps = false;

    public function pegawai()
    {
        return $this->hasMany(pegawai::class,'id_jabatan','id');
    }
}
