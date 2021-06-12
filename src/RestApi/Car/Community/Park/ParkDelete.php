<?php


namespace HikCloud\RestApi\Car\Community\Park;


use HikCloud\RestApi\HikRestApi;

class ParkDelete extends HikRestApi
{

    protected $api = '/api/v1/community/park/delete';

    public $method = 'DELETE';

    protected $required_params = [
        'parkIds' => '',
    ];

    public function initUri()
    {
        parent::initUri();
    }

}