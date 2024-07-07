<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'amount',
        'address',
        'status',
        'transaction_id',
        'currency',
    ];

    /**
     * Get the user associated with the order.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
