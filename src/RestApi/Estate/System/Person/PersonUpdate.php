<?php


namespace HikCloud\RestApi\Estate\System\Person;


use HikCloud\RestApi\HikRestApi;

class PersonUpdate extends HikRestApi
{

    protected $api = '/api/v1/estate/system/person/actions/updatePerson';

    public $method = 'POST';

    protected $required_params = [
        'personId' => '',
    ];
//“姓名”+“手机号”或者“证件类型”+“证件号码”至少有一组信息完整
    protected $optional_params = [
        'personName' => '',
        'credentialType' => '',
        'credentialNumber' => '',
        'mobile' => '',
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
        'countyCode' => ''
    ];
}