<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\SalesLine;

class Sales extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillabe = [
        'idempotency_key',
        'qris_id',
        'transaction_date',
        'status',
        'dispense_status',
        'total_amount'
    ];

    protected $casts = [
        'transaction_date' => 'datetime'
    ];

    public function salesLines() {
        return $this->hasMany(SalesLine::class);
    }
}
