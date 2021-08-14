<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemberhentianModels extends Model
{
    use HasFactory;

    protected $table = 'table_pemberhentian';

    protected $fillable = ['noreg', 'jk', 'kategori_permohonan', 'objekkdh', 'kabupaten', 'penyebabkdh', 'nama', 'provinsi', 'upload1', 'upload2', 'upload3', 'upload4', 'upload5', 'upload6'];
}
