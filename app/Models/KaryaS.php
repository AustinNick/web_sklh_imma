<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaryaS extends Model
{
    use HasFactory;
    protected $table = "tbkaryasiswa";
    protected $primaryKey = "id";
    protected $fillable = ["judul_proyek", "anggota", "gambar", "link_poryek", "status"];
}
