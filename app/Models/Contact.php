<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = "tbcontact";
    protected $primaryKey = "no";
    protected $fillable = ["nama", "email", "hp", "pesan", "status"];
}
