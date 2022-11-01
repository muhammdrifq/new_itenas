<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_dosen extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function prodi()
    {
        return $this->belongsTo(tb_prodi::class, 'id_prodis');
    }

    public function kelas()
    {
        return $this->belongsTo(tb_kelas::class, 'id_kelas');
    }

    public function gambar()
    {
        if ($this->profile_pict && file_exists(public_path('images/profile_pict/dosen/' . $this->profile_pict))) {
            return asset('images/profile_pict/dosen/' . $this->profile_pict);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteGambar()
    {
        if ($this->profile_pict && file_exists(public_path('images/profile_pict/dosen/' . $this->profile_pict))) {
            return unlink(public_path('images/profile_pict/dosen/' . $this->profile_pict));
        }
    }
}
