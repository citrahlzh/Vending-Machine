<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Sales;
use App\Models\ProductDisplay;

class SalesLine extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'sales_id',
        'product_display_id',
        'status'
    ];

    public function sales(){
        return $this->belongsTo(Sales::class);
    }

    public function productDisplay() {
        return $this->belongsTo(ProductDisplay::class);
    }
}
