<?php


namespace HikCloud\RestApi\Estate\EntranceGuard\Actions;


use HikCloud\RestApi\HikRestApi;

class DeviceList extends HikRestApi
{

    public $api = '/api/v1/estate/entranceGuard/remoteControl/actions/deviceList';

    public $method = 'GET';

    protected $required_params = [
        'personId' => '',
        'communityId' => '',
        'personType' => ''
    ];

    protected $optional_params = [];
}