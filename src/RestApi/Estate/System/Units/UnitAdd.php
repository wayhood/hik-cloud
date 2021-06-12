<?php


namespace HikCloud\RestApi\Estate\System\Units;


use HikCloud\RestApi\HikRestApi;

class UnitAdd extends HikRestApi
{

    protected $api = '/api/v1/estate/system/units';

    public $method = 'POST';

    protected $required_params = [
        'buildingId' => '',
        'unitNumber' => ''
    ];

    protected $optional_params = [
        'unitName' => '',
        'unionId' => ''
    ];
}