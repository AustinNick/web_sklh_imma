<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DownL extends Model
{
    use HasFactory;
    protected $table = "tbdownload";
    protected $primaryKey = "id";
    protected $keyType = "string";
    protected $fillable = ["judul", "nama_file", "deskripsi", "kode_mapel"];
}
