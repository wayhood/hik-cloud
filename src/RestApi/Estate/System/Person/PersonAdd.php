<?php


namespace HikCloud\RestApi\Estate\System\Person;


use HikCloud\RestApi\HikRestApi;

class PersonAdd extends HikRestApi
{
    protected $api = '/api/v1/estate/system/person';

    public $method = 'POST';

    protected $required_params = [
        'personName' => '',
    ];
//“姓名”+“手机号”或者“姓名”+“证件类型”+“证件号码”至少有一组信息完整
    protected $optional_params = [
        'mobile' => '',
        'credentialType' => '',
        'credentialNumber' => '',
        'gender' => '',
        'birthday' => '',
        'personRemark' => '',
        'nation' => '',
        'educationalLevel' => '',
        'workUnit' => '',
        'position' => '',
        'religion' => '',
        'englishName' => '',
        'email' => '',
        'addressDetail' => '',
        'provinceCode' => '',
        'cityCode' => '',
        'countyCode' => '',
        'personCommunityRels' => [
            'communityId' => '',
            'buildingId' => '',
            'unitId' => '',
            'roomId' => '',
            'identityType' => '',
            'checkInDate' => '',
            'checkOutDate' => ''
        ]
    ];


}