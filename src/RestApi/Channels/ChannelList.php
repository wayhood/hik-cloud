<?php

namespace HikCloud\RestApi\Channels;

use HikCloud\RestApi\HikRestOutApi;

class ChannelList extends HikRestOutApi
{
    protected $api = '/v1/channels/list';

    public $method = 'GET';
    public $header;

    protected $required_params = [
        'deviceId' => '',
        'pageNo' => '',
        'pageSize' => '',
    ];

    protected $optional_params = [];

    public function __construct()
    {
        parent::__construct();
    }

}