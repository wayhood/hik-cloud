<?php

namespace HikCloud\RestApi;


use InvalidArgumentException;

class HikRestOutApi extends HikRestApi
{
    public function initHeaders()
    {
        if (empty($this->authorization)) {
            throw new InvalidArgumentException('expected access token!');
        }
        $this->headers = [
            "Host" => "api2.hik-cloud.com",
            "Content-Type" => "application/x-www-form-urlencoded; charset=utf-8",
            "Authorization" => "bearer {$this->authorization}",
        ];
    }

    public function getOptions(){
        $option = [
            'headers' => $this->headers
        ];
        if($this->method === 'GET'){
            $option['query'] = $this->getParams();
        }
        if($this->method === 'POST'){
            $option['form_params'] = $this->getParams();
        }
        return $option;
    }
}