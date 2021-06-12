<?php


namespace HikCloud\RestApi\Estate\EntranceGuard\Actions;


use HikCloud\RestApi\HikRestApi;

class FaceIssued extends HikRestApi
{
    public $api = '/api/v1/estate/entranceGuard/permissions/actions/faceIssued';

    public $method = 'POST';

    protected $required_params = [
        'personId' => '',
        'personType' => '',
        'faceUrl' => ''
    ];

    protected $optional_params = [
        'deviceId' => ''
    ];
}