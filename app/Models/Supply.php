<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'code',
        'date',
        'product_id',
        'supplier_id',
        'qty',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'suppliers_id');
    }
}
