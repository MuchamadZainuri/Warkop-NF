<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'name',
        'price',
        'stok',
        'note',
        'img',
        'type_id',
    ];

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'types_id');
    }

    public function supply()
    {
        return $this->hasMany(Supply::class);
    }
    
}
