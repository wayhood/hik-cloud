<?php


namespace HikCloud\RestApi\Estate\System\Person;


use HikCloud\RestApi\HikRestApi;

class PersonRoomList extends HikRestApi
{
    protected $api = '/api/v1/estate/system/person/actions/roomList';

    public $method = 'GET';

    protected $required_params = [
        'personId' => '',
        'communityId' => '',
        'pageNo' => '',
        'pageSize' => '',
    ];
}