<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $table = "tbmapel";
    protected $primaryKey = "kodemapel";
    protected $keyType = "string";
    protected $fillable = ["kodemapel", "mapel", "id_guru"];
}
