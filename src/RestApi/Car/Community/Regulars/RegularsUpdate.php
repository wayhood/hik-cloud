<?php


namespace HikCloud\RestApi\Car\Community\Regulars;


use HikCloud\RestApi\HikRestCarApi;

class RegularsUpdate extends HikRestCarApi
{

    protected $api = '/api/v1/community/vehicle/cars/regulars/update';

    public $method = 'POST';

    protected $required_params = [
        'communityId' => '',
        'oldPlateNo' => ''
    ];

    protected $optional_params = [
        'newPlateNo' => '',
        'cardNo' => '',
        'plateType' => '',
        'plateColor' => '',
        'carType' => '',
        'carColor' => '',
        'personName' => ''
    ];
}