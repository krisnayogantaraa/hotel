<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_ruangan extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'id_ruangan',
        'jenis_suite',
        'jenis_kasur',
        'kapasitas',
        'harga'
    ];
}
