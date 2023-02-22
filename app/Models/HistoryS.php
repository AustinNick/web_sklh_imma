<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryS extends Model
{
    use HasFactory;
    protected $table = "tbhistorysiswa";
    protected $primaryKey = "kodeuser";
    protected $keyType = "string";
    protected $fillable = ["kodeuser", "tahun", "kelas", "deskripsi"];
}
