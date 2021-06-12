<?php


namespace HikCloud\RestApi\Car\Community;


use HikCloud\RestApi\HikRestCarApi;

class CommunityDelete extends HikRestCarApi
{

    protected $api = '/api/v1/community/delete';

    public $method = 'DELETE';

    protected $required_params = [
        'communityIds' => '',
    ];
}