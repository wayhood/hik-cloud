<?php


namespace HikCloud\RestApi\Car\Community\Park;

use HikCloud\RestApi\HikRestApi;

class ParkUpdate extends HikRestApi
{

    protected $api = '/api/v1/community/park/update';

    public $method = 'POST';

    protected $required_params = [
        'communityId' => '',
        'parkName' => '',
        'parkId' => ''
    ];

    protected $optional_params = [];

    public function __construct()
    {
        parent::__construct();
    }
}