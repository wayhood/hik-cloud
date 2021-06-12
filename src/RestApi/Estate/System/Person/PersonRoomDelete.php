<?php


namespace HikCloud\RestApi\Estate\System\Person;


use HikCloud\RestApi\HikRestApi;

class PersonRoomDelete extends HikRestApi
{
    protected $api = '/api/v1/estate/system/person/actions/deleteRoomRelation';

    public $method = 'POST';

    protected $required_params = [
        'personId' => '',
        'roomId' => ''
    ];
}