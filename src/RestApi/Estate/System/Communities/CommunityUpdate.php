<?php


namespace HikCloud\RestApi\Estate\System\Communities;

use HikCloud\RestApi\HikRestApi;

class CommunityUpdate extends HikRestApi
{
    protected $api = '/api/v1/estate/system/communities/actions/updateCommunity';

    public $method = 'POST';

    protected $required_params = [
        'communityId' => '',
        'communityName' => '',
        'provinceCode' => '',
        'addressDetail' => '',
    ];

    protected $optional_params = [
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