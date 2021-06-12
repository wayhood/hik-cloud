<?php


namespace HikCloud\RestApi;


use InvalidArgumentException;

class HikRestCarApi extends HikRestApi
{
    protected $api = '/';
    protected $host = 'https://pbapi.hik-cloud.com';

    public function initHeaders()
    {
        if (empty($this->authorization)) {
            throw new InvalidArgumentException('expected access token!');
        }
        $this->headers = [
            "Host" => "pbapi.hik-cloud.com",
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
        if($this->method === 'PUT'){
            $option['form_params'] = $this->getParams();
        }
        if($this->method === 'DELETE'){
            $option['form_params'] = $this->getParams();
        }
        return $option;
    }
}