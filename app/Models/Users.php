<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = "tbuser";
    protected $primaryKey = "iduser";
    protected $keyType = "string";
    protected $fillable = ["iduser", "nisn", "nama", "kelas", "jurusan", "alamat", "telp", "email", "angkatan", "status", "aktif"];
}
