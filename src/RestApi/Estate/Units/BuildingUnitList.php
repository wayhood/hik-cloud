<?php


namespace HikCloud\RestApi\Estate\Units;


use HikCloud\RestApi\HikRestApi;

class BuildingUnitList extends HikRestApi
{

    protected $api = '/api/v1/estate/system/units/actions/buildingUnitList';

    public $method = 'POST';

    protected $required_params = [
        'buildingId' => '',
        'pageNo' => '',
        'pageSize' => '',
    ];
}