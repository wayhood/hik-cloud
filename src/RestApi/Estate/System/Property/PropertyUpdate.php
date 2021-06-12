<?php


namespace HikCloud\RestApi\Estate\System\Property;


use HikCloud\RestApi\HikRestApi;

class PropertyUpdate extends HikRestApi
{

    protected $api = '/api/v1/auth/open/neptune/property/actions/updateProperty';//'/api/v1/estate/system/property/actions/updateProperty';

    public $method = 'POST';

    protected $required_params = [
        'personId' => '',
//        'phoneNumber' => '',
        'communityIds' => '',
        'roleKeys' => ''
    ];

    protected $optional_params = [
        'personName' => ''
    ];
}