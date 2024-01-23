<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'products_list', 'user_id', 'total_cost', 'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
