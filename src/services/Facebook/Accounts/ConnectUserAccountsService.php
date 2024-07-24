<?php

namespace Cvtdin\ConvertedinFacebook\services\Facebook\Accounts;

use Cvtdin\ConvertedinFacebook\DataObjects\BusinessDataObject;
use FacebookAds\Api;
use FacebookAds\Object\Business;

class ConnectUserAccountsService
{

    private static Api $api;

    public static function businesses(BusinessDataObject $businessDataObject)
    {
        self::init(); // Ensure the Api instance is initialized
        $business = new Business();
        return $business::getFieldsEnum();
    }

    public static function init()
    {
        if (is_null(self::$api)) {
            self::$api = app('facebook-api');
        }
    }
}