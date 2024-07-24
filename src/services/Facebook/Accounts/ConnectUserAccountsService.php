<?php

namespace Cvtdin\ConvertedinFacebook\services\Facebook\Accounts;

use Cvtdin\ConvertedinFacebook\DataObjects\BusinessDataObject;
use FacebookAds\Object\Business;

class ConnectUserAccountsService
{
    public static function businesses(BusinessDataObject $businessDataObject)
    {
        $business = new Business();
        return$business::getFieldsEnum();
    }
}