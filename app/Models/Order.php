<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{


    protected $fillable = [
        'user_id',
        'shop_id',
        'status'

    ];

    public function user():BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function shop():BelongsTo {
        return $this->belongsTo(Shop::class);
    }

}
