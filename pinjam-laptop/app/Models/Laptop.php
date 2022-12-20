<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;
    protected $fillable = [
        'nis',
        'name',
        'rayon',
        'rombel',
        'purposes',
        'keterangan',
        'date',
        'return_date',
        'teacher',
    ];
}
