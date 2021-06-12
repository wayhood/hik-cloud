<?php


namespace HikCloud\RestApi\Estate\Buildings;


use HikCloud\RestApi\HikRestApi;

class CommunityBuildingList extends HikRestApi
{

    protected $api = '/api/v1/estate/system/buildings/actions/communityBuildingList';

    public $method = 'POST';

    protected $required_params = [
        'communityId' => '',
        'pageNo' => '',
        'pageSize' => '',
    ];
}