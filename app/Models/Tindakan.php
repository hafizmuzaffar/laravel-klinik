<?php

namespace App\Models;

use App\Models\Ruang;
use App\Models\Pasien;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tindakan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable  = [
        'kd_pasien',
        'kd_ruang',
        'jenis_pembayaran',
        'kd_obat',
        'jumlah_obat',
        'jumlah_pembayaran',
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'kd_pasien');
    }
    public function ruang()
    {
        return $this->belongsTo(Ruang::class, 'kd_ruang');
    }
    public function obat()
    {
        return $this->belongsTo(Obat::class, 'kd_obat');
    }
}
