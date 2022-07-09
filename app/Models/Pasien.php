<?php

namespace App\Models;

use App\Models\Tindakan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pasien extends Model
{
    use HasFactory;
    // protected $guarded = ['kd_pasien'];
    protected $fillable  = [
        'nama_pasien',
        'jenis_kelamin',
        'alamat',
        'keluhan',
        'kd_dokter',
        'kd_wilayah'
    ];

    public function tindakan()
    {
        return $this->hasMany(Tindakan::class, 'kd_pasien');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'kd_dokter');
    }
    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class, 'kd_wilayah');
    }
}
