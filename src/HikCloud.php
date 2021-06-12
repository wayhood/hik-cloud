<?php

namespace HikCloud;

class HikCloud
{

    protected $config;

    public function __construct(array $config)
    {
        $this->config =$config;


    }

    public function request($method, array $params = null){

        $accessToken = new AccessToken($this->config);
        $token = $accessToken->getToken();

        $request = HikRequest::getInstance();
        $request->initRequest($method,$params,$token['access_token']);
        return $request->sendRequest();
    }
}