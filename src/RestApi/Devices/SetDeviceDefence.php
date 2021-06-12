<?php

namespace HikCloud\RestApi\Devices;

use HikCloud\RestApi\HikRestOutApi;

class SetDeviceDefence extends HikRestOutApi
{
    protected $api = '/v1/devices/actions/setDefence';

    public $method = 'POST';
    public $header;

    protected $required_params = [
        'deviceId' => '',
        'isDefence' => '',
    ];

    protected $optional_params = [];

    public function __construct()
    {
        parent::__construct();
    }

}