<?php


namespace HikCloud\RestApi\Estate\EntranceGuard\Actions;


class DeleteFaceIssued extends \HikCloud\RestApi\HikRestApi
{
    public $api = '/api/v1/estate/entranceGuard/permissions/actions/deleteFaceIssued';

    public $method = 'POST';

    protected $required_params = [
        'personId' => ''
    ];

    protected $optional_params = [
        'deviceId' => ''
    ];
}