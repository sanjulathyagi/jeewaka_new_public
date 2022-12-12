<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;
    use TwoFactorAuthenticatable;

    protected $fillable = [
        'name',
        'email',
        'password',

    ];

    public function cartItems()
    {
        return $this->hasMany(cartItem::class,'customer_id','id');

    }

    public function cartItemsCount()
    {
        return $this->hasMany(cartItem::class,'customer_id','id')->count();

    }

}

