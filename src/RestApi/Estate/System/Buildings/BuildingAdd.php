<?php


namespace HikCloud\RestApi\Estate\System\Buildings;


use HikCloud\RestApi\HikRestApi;

class BuildingAdd extends HikRestApi
{

    protected $api = '/api/v1/estate/system/buildings';

    public $method = 'POST';

    protected $required_params = [
        'communityId' => '',
        'buildingName' => '',
        'buildingNumber' => '',
        'floorUpCount' => '',
        'floorFamilyCount' => '',
        'buildingUnitSize' => ''
    ];

    protected $optional_params = [
        'unionId' => '',
        'floorDownCount' => '',
        'buildingRemark' => ''
    ];
}