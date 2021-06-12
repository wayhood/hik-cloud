<?php


namespace HikCloud\RestApi\Car\Community\Alarms;


use HikCloud\RestApi\HikRestCarApi;

class AlarmsAdd extends HikRestCarApi
{

    protected $api = '/api/v1/community/vehicle/cars/alarms/add';

    public $method = 'PUT';

    protected $required_params = [
        'communityId' => '',
        'plateNo' => '',
    ];

    protected $optional_params = [
        'plateColor' => '',
        'phoneNo' => '',
        'startTime' => '',
        'endTime' => '',
        'num' => '',
        'remark' => ''
    ];
}