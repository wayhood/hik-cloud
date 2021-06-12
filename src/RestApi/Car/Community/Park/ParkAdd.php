<?php


namespace HikCloud\RestApi\Car\Community\Park;


use HikCloud\RestApi\HikRestCarApi;

class ParkAdd extends HikRestCarApi
{

    protected $api = '/api/v1/community/park/add';

    public $method = 'POST';

    protected $required_params = [
        'parkName' => '',
        'communityId' => ''
    ];

}