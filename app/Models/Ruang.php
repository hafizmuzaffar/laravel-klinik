<?php

namespace App\Models;

use App\Models\Tindakan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ruang extends Model
{
    use HasFactory;
    protected $fillable  = [
        'nama_ruang', 'nama_gedung'
    ];

    public function tindakan()
    {
        return $this->hasMany(Tindakan::class, 'kd_ruang');
    }
}
