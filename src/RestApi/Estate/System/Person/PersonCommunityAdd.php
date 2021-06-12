<?php


namespace HikCloud\RestApi\Estate\System\Person;


use HikCloud\RestApi\HikRestApi;

class PersonCommunityAdd extends HikRestApi
{

    protected $api = '/api/v1/estate/system/person/actions/addCommunityRelation';

    public $method = 'POST';

    protected $required_params = [
        'personId' => '',
        'communityId' => ''
    ];

    protected $optional_params = [
    ];
}