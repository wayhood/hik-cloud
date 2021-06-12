<?php


namespace HikCloud\RestApi\Estate\Visitors;


use HikCloud\RestApi\HikRestApi;

class VisitorAdd extends HikRestApi
{
    protected $api = '/api/v1/estate/visitors';

    public $method = 'POST';

    protected $required_params = [
        'personId' => '',
        'personType' => '',
        'visitorName' => '',
        'gender' => '',
        'phone' => '',
        'roomId' => '',
        'visitorEffectiveTime' => '',
        'visitorLeaveTime' => ''
    ];

    protected $optional_params = [
        'visitReason' => '',
        'deviceIds' => ''
    ];
}