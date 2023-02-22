<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekskul extends Model
{
    use HasFactory;
    protected $table = "tbekskul";
    protected $primaryKey = "idekskul";	
    protected $fillable = ["nama_ekskul", "deskripsi", "gambar"];
}
