<?php


namespace HikCloud\RestApi\Estate\System\Units;


use HikCloud\RestApi\HikRestApi;

class UnitList extends HikRestApi
{

    protected $api = '/api/v1/estate/system/units/actions/buildingUnitList';

    public $method = 'POST';

    protected $required_params = [
        'buildingId' => '',
        'pageNo' => '',
        'pageSize' => ''
    ];
}