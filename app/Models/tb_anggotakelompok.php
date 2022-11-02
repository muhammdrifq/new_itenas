<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_anggotakelompok extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];
    public $timestamps = true;

    public function mahasiswa()
    {
        return $this->belongsTo(tb_mahasiswa::class, 'id_mahasiswa');
    }
    public function kelompok()
    {
        return $this->belongsTo(tb_kelompok::class, 'id_kelompok');
    }
}
