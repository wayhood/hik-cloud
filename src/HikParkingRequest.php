<?php


namespace HikCloud;


use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use HikCloud\Exception\InvalidApiException;
use HikCloud\RestApi\HikRestApi;
use HikCloud\RestApi\HikRestParkApi;

class HikParkingRequest
{

    private static $instance = null;

    /**
     * @var Client
     */
    private $guzzle_client = null;

    /**
     * @var HikRestParkApi
     */
    private $hik_api = null;

    private function __construct()
    {
        $this->guzzle_client = new Client([
            'verify' => false
        ]);
    }

    public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * 初始化请求
     * @param $request_name
     * @param array $request_params
     * @param array $authorization
     * @param array $host
     * @return HikParkingRequest
     * @throws InvalidApiException
     * @throws Exception
     */
    public function initRequest($request_name, array $request_params = null, array $authorization = [],array $host = [])
    {
        if (false === HikApiClassMap::getClassName($request_name))
            throw new InvalidApiException($request_name);
        $class_name = HikApiClassMap::getClassName($request_name);

        $this->hik_api = new $class_name;

        if (!empty($host)) {
            $this->hik_api->setHost($host);
        } else {
            throw new Exception('init Ip and Port before send');
        }

        if (!empty($authorization)) {
            $this->hik_api->setReqAuth($authorization);
        } else {
            throw new Exception('init token before send');
        }

        if (!empty($request_params)) {
            $this->hik_api->setReqParams($request_params);
        }

        return $this;
    }

    /**
     * 发送请求
     * @throws Exception
     */
    public function sendRequest()
    {

        if (!$this->hik_api instanceof HikRestParkApi) {
            throw new Exception('init a request before send');
        }
        $this->hik_api->ready();

        $this->hik_api->initUri();
        $this->hik_api->initHeaders();

        try {
            $response = $this->guzzle_client->request(
                $this->hik_api->method,
                $this->hik_api->uri,
                $this->hik_api->getOptions());
        } catch (RequestException $e) {
            $response = $e->getResponse();
            if ($response->getStatusCode() == '401') {
                return [
                    'code' => 401,
                    'message' => '授权过期'
                ];
            }
        }

        return json_decode(strval($response->getBody()->getContents()), true);
    }
}