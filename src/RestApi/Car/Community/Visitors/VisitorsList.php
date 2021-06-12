<?php


namespace HikCloud\RestApi\Car\Community\Visitors;


use HikCloud\RestApi\HikRestCarApi;

class VisitorsList extends HikRestCarApi
{

    protected $api = '/api/v1/community/vehicle/cars/visitors/list';

    public $method = 'GET';

    protected $required_params = [
        'communityId' => '',
        'pageNo' => '',
        'pageSize' => '',
        'plateNo' => ''
    ];
}