<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambiluang extends Model
{
    use HasFactory;
    protected $fillable = ['nama','harga','jenis'];
}
