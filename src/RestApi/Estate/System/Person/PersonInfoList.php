<?php


namespace HikCloud\RestApi\Estate\System\Person;


use HikCloud\RestApi\HikRestApi;

class PersonInfoList extends HikRestApi
{

    public $api = '/api/v1/estate/system/person/actions/personInfoList';

    public $method = 'POST';

    protected $required_params = [
        'communityId' => '',
        'pageNo' => '',
        'pageSize' => '',
    ];
}