<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_mahasiswa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function prodi()
    {
        return $this->belongsTo(tb_prodi::class, 'id_prodi');
    }

    public function semester()
    {
        return $this->belongsTo(tb_semester::class, 'id_semester');
    }

    

    public function gambar()
    {
        if ($this->profile_pict && file_exists(public_path('images/profile_pict/koordinator/' . $this->profile_pict))) {
            return asset('images/profile_pict/koordinator/' . $this->profile_pict);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteGambar()
    {
        if ($this->profile_pict && file_exists(public_path('images/profile_pict/koordinator' . $this->profile_pict))) {
            return unlink(public_path('images/profile_pict/koordinator/' . $this->profile_pict));
        }
    }
}
