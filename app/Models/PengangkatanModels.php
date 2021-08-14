<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengangkatanModels extends Model
{
    protected $table = 'table_pengangkatan';

    protected $fillable = ['noreg', 'jk', 'kategori_permohonan', 'objekkdh', 'kabupaten', 'penyebabkdh', 'nama', 'provinsi', 'upload1', 'upload2', 'upload3', 'upload4', 'upload5', 'upload6', 'upload7', 'upload8', 'upload9', 'upload10', 'upload11', 'upload12', 'upload13'];

    use HasFactory;
}
