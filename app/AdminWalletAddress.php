<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminWalletAddress extends Model
{
    protected $fillable = [
        'address',
        'image'
    ];
}
