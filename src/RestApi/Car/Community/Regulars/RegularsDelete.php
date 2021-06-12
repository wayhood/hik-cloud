<?php


namespace HikCloud\RestApi\Car\Community\Regulars;


use HikCloud\RestApi\HikRestCarApi;

class RegularsDelete extends HikRestCarApi
{

    protected $api = '/api/v1/community/vehicle/cars/regulars/delete';

    public $method = 'DELETE';

    protected $required_params = [
        'communityId' => '',
        'plateNo' => ''
    ];

    protected $optional_params = [
        'plateColor' => ''
    ];
}