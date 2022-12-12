<?php

namespace domain\Facades;

use domain\Services\CartService\CartService;
use Illuminate\Support\Facades\Facade;

class CartFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return CartService::class;
    }

}
