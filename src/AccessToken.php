<?php


namespace HikCloud;


use Doctrine\Common\Cache\Cache;
use Doctrine\Common\Cache\FilesystemCache;
use HikCloud\Exception\InvalidAccountException;

class AccessToken
{

    protected $config;

    protected $cache;

    protected $prefix;

    protected $token;

    protected $cacheKey;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function getToken()
    {

        $cached = $this->getCache()->fetch($this->getCacheKey()) ?: $this->token;;

        if (empty($cached)) {
            $request = HikRequest::getInstance();

            $request->initRequest('OAuth.Token', $this->config['client']);
            $result = $request->sendRequest();

            if (!isset($result['access_token'])) {
                throw new InvalidAccountException();
            } else {
                $this->setToken(
                    $result,
                    $result['expires_in']
                );
                return $result;
            }
        }
        return $cached;
    }

    public function setCache(Cache $cache)
    {
        $this->cache = $cache;

        return $this;
    }

    public function getCache()
    {
        return $this->cache ?: $this->cache = new FilesystemCache($this->config['cache_path'] ?: sys_get_temp_dir());
    }

    public function setToken($token, $expires = 86400)
    {
        if ($expires) {
            $this->getCache()->save($this->getCacheKey(), $token, $expires);
        }

        $this->token = $token;

        return $this;
    }

    public function getCacheKey()
    {
        if (is_null($this->cacheKey)) {
            return $this->prefix . $this->config['client']['client_id'];
        }

        return $this->cacheKey;
    }

}