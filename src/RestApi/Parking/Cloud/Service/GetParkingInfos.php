<?php


namespace HikCloud\RestApi\Parking\Cloud\Service;


use HikCloud\RestApi\HikRestParkApi;

class GetParkingInfos extends HikRestParkApi
{

    protected $api = '/cloud/service/getParkingInfos';

    public $method = 'POST';

    protected $required_params = [
        'pageNo' => '',
        'pageSize' => ''
    ];

    protected $optional_params = [];
}