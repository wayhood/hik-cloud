<?php


namespace HikCloud\RestApi\Estate\Devices;


use HikCloud\RestApi\HikRestApi;

class DeviceChannelList extends HikRestApi
{

    protected $api = '/api/v1/estate/devices/channels/actions/listByCommunityId';

    public $method = 'GET';

    protected $required_params = [
        'communityId' => '',
        'pageNo' => '',
        'pageSize' => ''
    ];
}