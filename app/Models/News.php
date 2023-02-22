<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = "tbnews";
    protected $primaryKey = "idnews";
    protected $fillable = ["header", "subtitle", "deskripsi", "created_by", "gambar", "kategori"];
}
