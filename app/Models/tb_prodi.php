<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_prodi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = true;

    public function kelas()
    {
        return $this->hasMany(tb_kelas::class);
    }

}
