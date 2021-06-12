<?php


namespace HikCloud\RestApi\Estate\System\Units;


use HikCloud\RestApi\HikRestApi;

class UnitDelete extends HikRestApi
{

    protected $api = '/api/v1/estate/system/units/{unitId}';

    public $method = 'DELETE';

    protected $required_params = [
        'unitId' => '',
    ];

    public function initUri()
    {
        $this->api = preg_replace('/{unitId}/', $this->request_params['unitId'], $this->api);
        parent::initUri();
    }

    public function getParams()
    {
        return [];
    }
}