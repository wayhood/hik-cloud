<?php


namespace HikCloud\RestApi\Estate\System\Person;


use HikCloud\RestApi\HikRestApi;

class PersonDelete extends HikRestApi
{

    protected $api = '/api/v1/estate/system/person/{personId}';

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