<?php

namespace HikCloud\RestApi\Channels;

use HikCloud\RestApi\HikRestOutApi;

class SynchDeviceChannels extends HikRestOutApi
{
    protected $api = '/v1/devices/{deviceId}/synchChannels';

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

    public function initUri()
    {
        $this->api = preg_replace('/\\{deviceId\\}/', $this->required_params['deviceId'], $this->api);
        parent::initUri();
    }

    public function getParams()
    {
        return [];
    }

}