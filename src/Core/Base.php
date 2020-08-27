<?php


namespace Safaricom\Mpesa\Core;


use Safaricom\Mpesa\Traits\UrlsTrait;

class Base
{
    use UrlsTrait;

    protected $authToken;
    protected $authUrl;
    protected $environment;

    public function __construct()
    {
        $this->authToken = $this->auth();
        $this->authUrl = $this->urls('auth');
    }
    public function auth()
    {

    }
}