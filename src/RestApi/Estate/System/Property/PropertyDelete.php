<?php


namespace HikCloud\RestApi\Estate\System\Property;


use HikCloud\RestApi\HikRestApi;

class PropertyDelete extends HikRestApi
{

    protected $api = '/api/v1/auth/open/neptune/property/{personId}';//'/api/v1/estate/system/property/{personId}';

    public $method = 'DELETE';

    protected $required_params = [
        'personId' => '',
    ];

    public function initUri()
    {
        $this->api = preg_replace('/{personId}/', $this->request_params['personId'], $this->api);
        parent::initUri();
    }

    public function getParams()
    {
        return [];
    }
}