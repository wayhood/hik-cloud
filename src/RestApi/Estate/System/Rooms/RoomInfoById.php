<?php


namespace HikCloud\RestApi\Estate\System\Rooms;


use HikCloud\RestApi\HikRestApi;

class RoomInfoById extends HikRestApi
{

    protected $api = '/api/v1/estate/system/rooms/actions/infoById';

    public $method = 'GET';

    protected $required_params = [
        'roomId' => ''
    ];

}