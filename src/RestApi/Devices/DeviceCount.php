<?php

namespace HikCloud\RestApi\Devices;

use HikCloud\RestApi\HikRestOutApi;

class DeviceCount extends HikRestOutApi
{
    protected $api = '/v1/devices/count';

    public $method = 'GET';
    public $header;

    protected $required_params = [];

    protected $optional_params = [];

    public function __construct()
    {
        parent::__construct();
    }

}