<?php


namespace HikCloud\RestApi\Estate\Cards;


use HikCloud\RestApi\HikRestApi;

class CommunityRoomList extends HikRestApi
{

    protected $api = '/api/v1/estate/system/rooms/actions/communityRoomList';

    public $method = 'POST';

    protected $required_params = [
        'communityId' => '',
        'pageNo' => '',
        'pageSize' => '',
    ];
}