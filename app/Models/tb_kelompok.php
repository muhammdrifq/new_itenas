<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_kelompok extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];
    public $timestamps = true;

    public function ketua()
    {
        return $this->belongsTo(tb_mahasiswa::class, 'id_ketua');
    }

    public function kelas()
    {
        return $this->belongsTo(tb_kelas::class, 'id_kelas');
    }

    public function prodi()
    {
        return $this->belongsTo(tb_prodi::class, 'id_prodi');
    }
    
    public function posting()
    {
        return $this->hasMany(tb_posting::class);
    }
}
