<?php

namespace Facades;

use Illuminate\Support\Facades\Facade;

class FacebookFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'facebook-api';
    }
}