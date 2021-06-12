<?php


namespace HikCloud\RestApi\Car\Community\Visitors;


use HikCloud\RestApi\HikRestCarApi;

class VisitorsDelete extends HikRestCarApi
{

    protected $api = '/api/v1/community/vehicle/cars/visitors/delete';

    public $method = 'DELETE';

    protected $required_params = [
        'communityId' => '',
        'plateNo' => ''
    ];
}