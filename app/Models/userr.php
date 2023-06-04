<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userr extends Model
{
    use HasFactory;
    protected $table = 'user';
    public $timestamps = false;

    public function pegawai()
    {
        return $this->belongsTo(pegawai::class,'id_pegawai','id');
    }
}
