<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable  = [
        'nama_obat',
        'kategori_obat',
        'jumlah_obat',
        'harga',
    ];

    public function tindakan()
    {
        return $this->hasMany(Tindakan::class, 'kd_obat');
    }
}
