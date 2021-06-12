<?php


namespace HikCloud\RestApi\OAuth;


use HikCloud\RestApi\HikRestCarApi;

class CarToken extends HikRestCarApi
{
    protected $api = '/oauth/token';

    public $method = 'POST';

    protected $required_params = [
        'client_id' => '',
        'client_secret' => '',
        'grant_type' => '',
    ];

    protected $optional_params = [
        'scope' => '',
    ];

    public function __construct()
    {
        parent::__construct();
    }

    public function initHeaders()
    {
        $this->headers = [
            "Host" => "pbapi.hik-cloud.com",
            "Content-Type" => "application/x-www-form-urlencoded"
        ];
    }
}