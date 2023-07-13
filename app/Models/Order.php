<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $fillable = [
        'code',
        'date',
        'status',
        'qty',
        'note',
        'product_id',
        'user_id',

    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    
    public static function getStatusEnumValues()
    {
        $users = with(new static)->getTable();
        $enumValues = DB::select(DB::raw("SHOW COLUMNS FROM $users WHERE Field = 'status'"))[0]->Type;
        preg_match('/^enum\((.*)\)$/', $enumValues, $matches);
        $enumValues = [];
        if ($matches) {
            $enumValues = explode(',', $matches[1]);
            $enumValues = array_map(function ($value) {
                return trim($value, "'");
            }, $enumValues);
        }
        return $enumValues;
    }


}
