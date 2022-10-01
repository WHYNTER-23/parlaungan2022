<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'jadwal';
    protected $primaryKey = 'id_jadwal';
    protected $fillable = [
        'id_jadwal',
        'hari',
        'guru_id',
        'kelas_id',
        'mapel',
        'mulai',
        'sampai',
        'status',
    ];
}
