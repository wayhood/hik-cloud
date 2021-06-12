<?php

namespace HikCloud\RestApi\Channels;

use HikCloud\RestApi\HikRestOutApi;

class ChannelOsd extends HikRestOutApi
{
    protected $api = '/v1/channels/{channelId}/osd';

    public $method = 'POST';
    public $header;

    protected $required_params = [
        'channelId' => '',
        'isShow' => '',
    ];

    protected $optional_params = [
        'topLeftY' => '',
        'topLeftX' => '',
        'showInfo' => '',
    ];

    public function __construct()
    {
        parent::__construct();
    }

}