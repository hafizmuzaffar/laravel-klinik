<?php

namespace App\Models;

use App\Models\Pasien;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dokter extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable  = [
        'nama_dokter',
        'alamat',
        'spesialis_dokter',
    ];
    public function pasien()
    {
        return $this->hasMany(Pasien::class, 'kd_pasien');
    }
}
