<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perusahaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        
        
    ];

    protected $table = 'perusahaan';
    public $timestamps = false;
    
    public function pegawai()
    {
        return $this->hasMany(pegawai::class,'id_perusahaan','id');
    }
}
