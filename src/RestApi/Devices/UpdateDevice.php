<?php

namespace HikCloud\RestApi\Devices;

use HikCloud\RestApi\HikRestOutApi;

class UpdateDevice extends HikRestOutApi
{
    protected $api = '/v1/devices/{deviceId}/update';

    public $method = 'POST';
    public $header;

    protected $required_params = [
        'deviceId' => '',
        'deviceName' => '',
    ];

    protected $optional_params = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function initUri()
    {
        $this->api = preg_replace('/\\{deviceId\\}/', $this->required_params['deviceId'], $this->api);
        parent::initUri();
    }

    public function getParams()
    {
        return [
            'deviceName' => $this->request_params['deviceName']
        ];
    }

}