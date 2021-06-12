<?php


namespace HikCloud\RestApi\Estate\Visitors;


use HikCloud\RestApi\HikRestApi;

class VisitorDelete extends HikRestApi
{
    protected $api = '/api/v1/estate/visitors/{reservationId}';

    public $method = 'DELETE';

    protected $required_params = [
        'reservationId' => '',
    ];

    public function initUri()
    {
        $this->api = preg_replace('/{reservationId}/', $this->request_params['reservationId'], $this->api);
        parent::initUri();
    }

    public function getParams()
    {
        return [];
    }
}