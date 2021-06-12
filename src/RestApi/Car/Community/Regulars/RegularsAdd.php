<?php


namespace HikCloud\RestApi\Car\Community\Regulars;


use HikCloud\RestApi\HikRestCarApi;

class RegularsAdd extends HikRestCarApi
{

    protected $api = '/api/v1/community/vehicle/cars/regulars/add';

    public $method = 'PUT';

    protected $required_params = [
        'communityId' => '',
        'plateNo' => ''
    ];

    protected $optional_params = [
        'cardNo' => '',
        'ownerId' => '',
        'plateType' => '',
        'plateColor' => '',
        'carType' => '',
        'carColor' => '',
        'plateStart' => '',
        'personName' => '',
        'phoneNo' => '',
        'maxPassenger' => ''
    ];
}