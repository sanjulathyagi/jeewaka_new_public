<?php

namespace domain\Facades;

use domain\Services\Settings\SettingService;
use Illuminate\Support\Facades\Facade;

class SettingFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return SettingService::class;
    }

}

