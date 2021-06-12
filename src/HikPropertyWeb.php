<?php


namespace HikCloud;


class HikPropertyWeb
{

    public $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function getLoginUrl($params)
    {

        $params['appId'] = $this->config['appId'];
        $params['ns'] = $this->getNonceStr();
        $params['ts'] = $this->getMilliSecond();
        $sign = $this->makeSign($params);
        $params['signature'] = $sign;
        $str = $this->ToUrlParams($params);

        return "https://sq.hik-cloud.com/?{$str}";
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
        $string = $string . "&secret=" . $this->config['secret'];
        //签名步骤三：MD5加密
        $string = hash_hmac('sha256',$string,$this->config['secret']);
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