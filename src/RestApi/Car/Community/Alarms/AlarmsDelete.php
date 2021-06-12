<?php


namespace HikCloud\RestApi\Car\Community\Alarms;


use HikCloud\RestApi\HikRestCarApi;

class AlarmsDelete extends HikRestCarApi
{

    protected $api = '/api/v1/community/vehicle/cars/alarms/delete';

    public $method = 'DELETE';

    protected $required_params = [
        'communityId' => '',
        'alarmUuids' => ''  //布控车辆 UUID，删除多个时以英文逗号分隔
    ];
}