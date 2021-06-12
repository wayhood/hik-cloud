<?php


namespace HikCloud\RestApi\Car\Community\Regulars;


use HikCloud\RestApi\HikRestCarApi;

class RegularsList extends HikRestCarApi
{

    protected $api = '/api/v1/community/vehicle/cars/regulars/list';

    public $method = 'GET';

    protected $required_params = [
        'communityId' => '',
        'pageNo' => '',
        'pageSize' => '',
        'plateNo' => ''
    ];

    protected $optional_params = [
        'plateColor' => ''
    ];
}