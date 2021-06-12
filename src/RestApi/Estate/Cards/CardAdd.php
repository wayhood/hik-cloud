<?php


namespace HikCloud\RestApi\Estate\Cards;


use HikCloud\RestApi\HikRestApi;

class CardAdd extends HikRestApi
{

    protected $api = '/api/v1/estate/system/cards';

    public $method = 'POST';

    protected $required_params = [
        'cardNumber' => '',
    ];
}