<?php


namespace HikCloud\RestApi\Estate\Devices;


use HikCloud\RestApi\HikRestApi;

class DeviceList extends HikRestApi
{

    protected $api = '/api/v1/estate/devices/actions/listByCommunityId';


    public $method = 'POST';

    protected $required_params = [
        'communityId' => '',
        'pageNo' => '',
        'pageSize' => ''
    ];
}