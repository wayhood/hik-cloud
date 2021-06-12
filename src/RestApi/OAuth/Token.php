<?php

namespace HikCloud\RestApi\OAuth;

use HikCloud\RestApi\HikRestApi;

class Token extends HikRestApi
{
    protected $api = '/api/v1/auth/open/oauth/token'; //'/oauth/token';

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
            "Host" => "api2.hik-cloud.com",
            "Content-Type" => "application/x-www-form-urlencoded"
        ];
    }

    public function getOptions(){
        $option = [
            'headers' => $this->headers
        ];
        $option['form_params'] = $this->getParams();
        return $option;
    }

}