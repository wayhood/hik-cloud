<?php


namespace HikCloud\RestApi\Estate\EntranceGuard\Actions;


use HikCloud\RestApi\HikRestApi;

class GateControl extends HikRestApi
{
    public $api = '/api/v1/estate/entranceGuard/remoteControl/actions/gateControl';

    public $method = 'POST';

    protected $required_params = [
        'personId' => '',
        'deviceId' => ''
        'command' => ''
    ];
}