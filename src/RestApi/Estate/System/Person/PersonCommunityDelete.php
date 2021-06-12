<?php


namespace HikCloud\RestApi\Estate\System\Person;


use HikCloud\RestApi\HikRestApi;

class PersonCommunityDelete extends HikRestApi
{
    protected $api = '/api/v1/estate/system/person/actions/deleteCommunityRelation';

    public $method = 'POST';

    protected $required_params = [
        'personId' => '',
        'communityId' => ''
    ];
}