<?php


namespace HikCloud\RestApi\Estate\System\Rooms;


use HikCloud\RestApi\HikRestApi;

class RoomInfo extends HikRestApi
{

    protected $api = '/api/v1/estate/system/rooms/actions/info';

    public $method = 'GET';

    protected $required_params = [
        'communityId' => '',
        'buildingNumber' => '',
        'unitNumber' => '',
        'roomNumber' => ''
    ];

}