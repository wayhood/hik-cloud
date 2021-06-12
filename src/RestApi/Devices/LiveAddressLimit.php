<?php

namespace HikCloud\RestApi\Devices;

use HikCloud\RestApi\HikRestOutApi;

class LiveAddressLimit extends HikRestOutApi
{
    protected $api = '/v1/devices/liveAddressLimit';

    public $method = 'POST';
    public $header;

    protected $required_params = [
        'deviceId' => '',
    ];

    protected $optional_params = [];

    public function __construct()
    {
        parent::__construct();
    }

}