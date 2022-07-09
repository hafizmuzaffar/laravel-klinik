<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $table = 'transaction_detail';
    protected $fillable = [
        'transaction_id', 'tindakan_id'
    ];
    protected $hidden = [];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }
    public function tindakan()
    {
        return $this->belongsTo(Tindakan::class, 'tindakan_id', 'id');
    }
}
