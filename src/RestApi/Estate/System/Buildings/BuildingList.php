<?php


namespace HikCloud\RestApi\Estate\System\Buildings;


use HikCloud\RestApi\HikRestApi;

class BuildingList extends HikRestApi
{

    protected $api = '/api/v1/estate/system/buildings/actions/communityBuildingList';

    public $method = 'POST';

    protected $required_params = [
        'communityId' => '',
        'pageNo' => '',
        'pageSize' => ''
    ];
}