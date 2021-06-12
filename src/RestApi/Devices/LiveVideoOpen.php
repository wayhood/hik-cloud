<?php

namespace HikCloud\RestApi\Devices;

use HikCloud\RestApi\HikRestOutApi;

class LiveVideoOpen extends HikRestOutApi
{
    protected $api = '/v1/devices/liveVideoOpen';

    public $method = 'POST';
    public $header;

    protected $required_params = [
        'channelIds' => '',
    ];

    protected $optional_params = [];

    public function __construct()
    {
        parent::__construct();
    }

}