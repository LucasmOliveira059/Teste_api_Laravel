<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BinanceData extends Model
{
    protected $table = 'binance_data';

    protected $fillable = [
        'symbol',
        'price',
        'volume',
    ];
}
