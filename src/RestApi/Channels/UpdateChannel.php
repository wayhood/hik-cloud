<?php

namespace HikCloud\RestApi\Channels;

use HikCloud\RestApi\HikRestOutApi;

class UpdateChannel extends HikRestOutApi
{
    protected $api = '/v1/channels/{channelId}/update';

    public $method = 'POST';
    public $header;

    protected $required_params = [
        'channelId' => '',
        'channelName' => '',
    ];

    protected $optional_params = [];

    public function __construct()
    {
        parent::__construct();
    }

}