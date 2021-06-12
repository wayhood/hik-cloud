<?php


namespace HikCloud\RestApi\Estate\EntranceGuard\Actions;


use HikCloud\RestApi\HikRestApi;

class GetQrCode extends HikRestApi
{
    public $api = '/api/v1/estate/entranceGuard/permissions/actions/getQRcode';

    public $method = 'POST';

    protected $required_params = [
        'personId' => '',
        'personType' => '',
    ];

}