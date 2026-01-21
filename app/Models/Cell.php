<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ProductDisplay;

class Cell extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'row',
        'column',
        'code',
        'qty_current',
        'capacity'
    ];

    public function productDisplays() {
        return $this->hasMany(ProductDisplay::class);
    }
}
