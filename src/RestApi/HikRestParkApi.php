<?php


namespace HikCloud\RestApi;

use InvalidArgumentException;

class HikRestParkApi
{
    protected $port = '';
    protected $ip = '';
    protected $api = '/';
    protected $host = '';

    public $authorization;

    public $method;
    public $uri;
    public $headers;
    public $request_params = [];

    protected $required_params = [];
    protected $optional_params = [];

    public function __construct()
    {

    }

    /**
     * 设置请求
     * @param $config
     */
    public function setHost($config)
    {
        $this->ip = $config['ip'];
        $this->port = $config['port'];
        $this->host = 'http://'.$this->ip.':'.$this->port;
    }

    /**
     * 设置请求access_token
     * @param $authorization
     */
    public function setReqAuth($authorization)
    {
        $this->authorization = $authorization;
    }

    /**
     * 设置请求参数
     * @param string|array $key
     * @param string|int $value
     */
    public function setReqParams($key, $value = null)
    {
        if (!is_array($key)) {
            $this->setReqParam($key, $value);
        }
        foreach ($key as $real_key => $value) {
            $this->setReqParam($real_key, $value);
        }
    }

    /**
     * 检查请求参数
     * @param string $key
     * @param string $value
     */
    private function setReqParam(string $key, string $value)
    {
        // 参数通用检查规则
        $this->generalCheckReqParam($key, $value);

        // 参数专用检查规则
        $check_func = 'checkReq' . $key;
        if (method_exists($this, $check_func)) {
            $this->$check_func($value);
        }

        $this->request_params[$key] = $value;
    }

    /**
     * 参数通用检查规则
     * @param string $key
     * @param $value
     */
    private function generalCheckReqParam(string $key, $value)
    {
        if (!isset($this->required_params[$key]) && !isset($this->optional_params[$key])) {
            throw new InvalidArgumentException("unexpected request parameter [{$key}]");
        }
        if(isset($this->required_params[$key])){
            if ($value === '' || $value === null) {
                throw new InvalidArgumentException("parameter [{$key}] cannot be empty");
            }
        }
    }

    /**
     * 请求准备完成
     */
    public function ready()
    {
        foreach ($this->required_params as $key => $param) {
            if (!isset($this->request_params[$key])) {
                throw new InvalidArgumentException("missed request parameter [{$key}]");
            }
        }
    }

    public function initHeaders()
    {
        $this->headers = [
            "Content-Type" => "application/json; charset=utf-8"
        ];
    }

    public function initUri()
    {
        $token = $this->getToken();
        $this->uri = $this->host . $this->api.'?token='.$token;printf($this->uri);
    }

    public function getParams()
    {
        return $this->request_params;
    }

    public function getOptions(){
        $option = [
            'headers' => $this->headers
        ];
        if($this->method === 'POST'){
            $option['json'] = $this->getParams();
        }
        return $option;
    }

    public function getToken()
    {
        $params = [];
        $params['appkey'] = $this->authorization['appkey'];
        $params['nonce'] = $this->getNonceStr();
        $params['time'] = $this->getMilliSecond();
        return $this->makeSign($params);
    }

    public function getMilliSecond()
    {
        $arr = explode(' ', microtime());
        return (float)sprintf('%.0f', (floatval($arr[0]) + floatval($arr[1])) * 1000);
    }

    private function makeSign($values)
    {
        //签名步骤一：按字典序排序参数
        ksort($values);
        $string = $this->ToUrlParams($values);
        //签名步骤二：在string后加入secret
        $string = $string . "&secret=" . $this->authorization['secret'];
        //签名步骤三：MD5加密
        $string = md5($string);
        //签名步骤四：所有字符转为大写
        return strtoupper($string);
    }

    /**
     * 格式化参数格式化成url参数
     */
    private function toUrlParams($value)
    {
        $buff = "";
        foreach ($value as $k => $v) {
            if ($k != "secret" && $v != "" && !is_array($v)) {
                $buff .= $k . "=" . $v . "&";
            }
        }

        $buff = trim($buff, "&");
        return $buff;
    }

    /**
     * 32位随机数
     */
    public function getNonceStr($length = 32)
    {
        $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
        $str = "";
        for ($i = 0; $i < $length; $i++) {
            $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }
        return $str;
    }
}