<?php


namespace HikCloud\RestApi\Car\Community;

use HikCloud\RestApi\HikRestCarApi;

class CommunityUpdate extends HikRestCarApi
{

    protected $api = '/api/v1/community/update';

    public $method = 'POST';

    protected $required_params = [
        'communityId' => '',
        'name' => ''
    ];

    protected $optional_params = [];
}