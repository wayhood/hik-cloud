<?php


namespace HikCloud\RestApi\Car\Community\Alarms;


use HikCloud\RestApi\HikRestCarApi;

class AlarmsUpdate extends HikRestCarApi
{

    protected $api = '/api/v1/community/vehicle/cars/alarms/update';

    public $method = 'POST';

    protected $required_params = [
        'communityId' => '',
        'alarmUuid' => '',
        'plateNo' => '',
    ];

    protected $optional_params = [
        'personName' => '',
        'phoneNo' => '',
        'startTime' => '',
        'endTime' => '',
        'num' => '',
        'remark' => ''
    ];
}