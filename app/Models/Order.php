<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $fillable = [
        'code',
        'date',
        'qty',
        'total',
        'user_id',
        'product_id',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
