<?php


namespace HikCloud\RestApi\Estate\System\Rooms;


use HikCloud\RestApi\HikRestApi;

class RoomDelete extends HikRestApi
{

    protected $api = '/api/v1/estate/system/rooms/{roomId}';

    public $method = 'DELETE';

    protected $required_params = [
        'roomId' => '',
    ];

    public function initUri()
    {
        $this->api = preg_replace('/{roomId}/', $this->request_params['roomId'], $this->api);
        parent::initUri();
    }

    public function getParams()
    {
        return [];
    }
}