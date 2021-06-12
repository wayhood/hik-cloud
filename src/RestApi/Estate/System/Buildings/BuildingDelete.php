<?php


namespace HikCloud\RestApi\Estate\System\Buildings;


use HikCloud\RestApi\HikRestApi;

class BuildingDelete extends HikRestApi
{

    protected $api = '/api/v1/estate/system/buildings/{buildingId}';

    public $method = 'DELETE';

    protected $required_params = [
        'buildingId' => '',
    ];

    public function initUri()
    {
        $this->api = preg_replace('/{buildingId}/', $this->request_params['buildingId'], $this->api);
        parent::initUri();
    }

    public function getParams()
    {
        return [];
    }
}