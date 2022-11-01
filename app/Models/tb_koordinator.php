<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\SoftDeletes;

class tb_koordinator extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function prodi()
    {

        return $this->belongsTo(Prodi::class, 'id_prodi');
    }

    public function gambar()
    {
        if ($this->profile_pict && file_exists(public_path('images/profile_pict/' . $this->profile_pict))) {
            return asset('images/profile_pict/' . $this->profile_pict);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteGambar()
    {
        if ($this->profile_pict && file_exists(public_path('images/profile_pict/' . $this->profile_pict))) {
            return unlink(public_path('images/profile_pict/' . $this->profile_pict));
        }
    }


}
