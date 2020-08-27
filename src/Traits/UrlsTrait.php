<?php


namespace Safaricom\Mpesa\Traits;


trait UrlsTrait
{
    public function getUrl($name)
    {

    }

    public function urls()
    {
        if (!env('MPESA_ENV') === 'sandbox'):
            $base = "https://sandbox.safaricom.co.ke";
        else:
            $base  = "https://api.safaricom.co.ke";
        endif;
        return  [
            "auth" => "/oauth/v1/generate?grant_type=client_credentials",
            "reversal" => "/mpesa/reversal/v1/request",
            "b2c" => "/mpesa/b2c/v1/paymentrequest",

        ];
    }
}