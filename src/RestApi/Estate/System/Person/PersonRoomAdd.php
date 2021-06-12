<?php


namespace HikCloud\RestApi\Estate\System\Person;


use HikCloud\RestApi\HikRestApi;

class PersonRoomAdd extends HikRestApi
{

    protected $api = '/api/v1/estate/system/person/actions/addRoomRelation';

    public $method = 'POST';

    protected $required_params = [
        'personId' => '',
        'roomId' => '',
        'identityType' => '',
        'checkInDate' => ''
    ];

    protected $optional_params = [
        'checkOutDate' => '',
        'isAudit' => ''
    ];
}