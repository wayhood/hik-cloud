<?php

namespace HikCloud\RestApi\Devices;

use HikCloud\RestApi\HikRestOutApi;

class LiveAddress extends HikRestOutApi
{
    protected $api = '/v1/devices/liveAddress';

    public $method = 'GET';
    public $header;

    protected $required_params = [
        'channelId' => '',
    ];

    protected $optional_params = [];

    public function __construct()
    {
        parent::__construct();
    }

}