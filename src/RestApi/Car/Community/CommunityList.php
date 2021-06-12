<?php


namespace HikCloud\RestApi\Car\Community;


use HikCloud\RestApi\HikRestCarApi;

class CommunityList extends HikRestCarApi
{

    protected $api = '/api/v1/community/list';

    public $method = 'GET';

    protected $required_params = [
        'pageNo' => '',
        'pageSize' => ''
    ];


}