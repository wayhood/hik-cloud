<?php


namespace HikCloud\RestApi\Estate\System\Property;


use HikCloud\RestApi\HikRestApi;

class PropertyAdd extends HikRestApi
{

    protected $api = '/api/v1/auth/open/neptune/property';//'/api/v1/estate/system/property';

    public $method = 'POST';

    protected $required_params = [
        'phoneNumber' => '',
        'communityIds' => '',
        'roleKeys' => ''
    ];

    protected $optional_params = [
//        'userName' => '',
        'personName' => ''
    ];
}