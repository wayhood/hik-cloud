<?php

namespace HikCloud\RestApi\Devices;

use HikCloud\RestApi\HikRestOutApi;

class DeviceList extends HikRestOutApi
{
    protected $api = '/v1/devices/list';

    public $method = 'GET';
    public $header;

    protected $required_params = [
        'groupId' => '',
        'pageNo' => '',
        'pageSize' => '',
    ];

    protected $optional_params = [];

    public function __construct()
    {
        parent::__construct();
    }

}