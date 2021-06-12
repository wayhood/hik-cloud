<?php


namespace HikCloud\RestApi\Estate\System\Rooms;


use HikCloud\RestApi\HikRestApi;

class RoomCommunityList extends HikRestApi
{

    protected $api = '/api/v1/estate/system/rooms/actions/communityRoomList';

    public $method = 'POST';

    protected $required_params = [
        'communityId' => '',
        'pageNo' => '',
        'pageSize' => ''
    ];
}