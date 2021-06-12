<?php


namespace HikCloud\RestApi\Estate\System\Rooms;


use HikCloud\RestApi\HikRestApi;

class RoomList extends HikRestApi
{

    protected $api = '/api/v1/estate/system/rooms/actions/unitRoomList';

    public $method = 'POST';

    protected $required_params = [
        'unitId' => '',
        'pageNo' => '',
        'pageSize' => ''
    ];
}