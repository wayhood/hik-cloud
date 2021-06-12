<?php

namespace HikCloud\RestApi\Devices;

use HikCloud\RestApi\HikRestOutApi;

class AddDevice extends HikRestOutApi
{
    protected $api = '/v1/devices/add';

    public $method = 'POST';
    public $header;

    protected $required_params = [
        'groupId' => '',
        'deviceSerial' => '',
        'validateCode' => '',
    ];

    protected $optional_params = [];

    public function __construct()
    {
        parent::__construct();
    }

}