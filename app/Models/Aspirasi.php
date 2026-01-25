<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_aspirasi',
        'status',
        'id_kategori',
        'feedback'
    ];
}
