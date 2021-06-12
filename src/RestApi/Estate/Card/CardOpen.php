<?php


namespace HikCloud\RestApi\Estate\Card;


use HikCloud\RestApi\HikRestApi;

class CardOpen extends HikRestApi
{

    protected $api = '/api/v1/estate/system/cards/actions/openCard';

    public $method = 'POST';

    protected $required_params = [
        'cardNumber' => '',
        'personId' => '',
        'personType' => '',
    ];

    protected $optional_params = [
        'dviceIds' => []
    ];
}