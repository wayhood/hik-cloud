<?php


namespace HikCloud\RestApi\Car\Community\Visitors;


use HikCloud\RestApi\HikRestCarApi;

class VisitorsAdd extends HikRestCarApi
{

    protected $api = '/api/v1/community/vehicle/cars/visitors/add';

    public $method = 'PUT';

    protected $required_params = [
        'communityId' => '',
        'plateNo' => '',
        'startTime' => '',
        'endTime' => ''
    ];

    protected $optional_params = [
        'plateColor' => '',
        'carType' => '',
        'carColor' => '',
        'personName' => '',
        'phoneNo' => '',
        'company' => ''
    ];
}