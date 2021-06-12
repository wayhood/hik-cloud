<?php

namespace HikCloud\RestApi\Estate\System\Communities;

use HikCloud\RestApi\HikRestApi;

class CommunityAdd extends HikRestApi
{
    protected $api = '/api/v1/estate/system/communities';

    public $method = 'POST';

    protected $required_params = [
        'communityName' => '',
        'provinceCode' => '',
        'addressDetail' => '',
    ];

    protected $optional_params = [
        'unionId' => '',
        'cityCode' => '',
        'countyCode' => '',
        'communitySquareMeter' => '',
        'longitude' => '',
        'latitude' => '',
        'chargePersonId' => '',
        'phoneNumber' => '',
        'communityRemark' => '',
    ];

    public function __construct()
    {
        parent::__construct();
    }
}