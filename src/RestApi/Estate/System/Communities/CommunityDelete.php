<?php


namespace HikCloud\RestApi\Estate\System\Communities;


use HikCloud\RestApi\HikRestApi;

class CommunityDelete extends HikRestApi
{

    protected $api = '/api/v1/estate/system/communities/{communityId}';

    public $method = 'DELETE';

    protected $required_params = [
        'communityId' => '',
    ];

    public function initUri()
    {
        $this->api = preg_replace('/{communityId}/', $this->request_params['communityId'], $this->api);
        parent::initUri();
    }

    public function getParams()
    {
        return [];
    }
}