<?php
namespace xltxlm\url\Urlinfo;

use \xltxlm\url\Basic\UrlTrait;

/**
 * 获取网址的基础信息;
*/
abstract class Urlinfo_implements
{
    use UrlTrait;

    /* @var string  协议:http/s */
    protected $scheme = '';

    /**
    * @return string;
    */
    abstract public function getscheme():string;
    
    /**
    * @param string $scheme;
    * @return $this
    */
    protected function setscheme(string $scheme)
    {
        $this->scheme = $scheme;
        return $this;
    }
    /* @var string  主机头,和域名不一样,域名只有2位 */
    protected $host = '';

    /**
    * @return string;
    */
    abstract public function gethost():string;
    
    /**
    * @param string $host;
    * @return $this
    */
    protected function sethost(string $host)
    {
        $this->host = $host;
        return $this;
    }
    /* @var string  类似xx.com. www部分不要 */
    protected $domain = '';

    /**
    * @return string;
    */
    abstract public function getdomain():string;
    
    /**
    * @param string $domain;
    * @return $this
    */
    protected function setdomain(string $domain)
    {
        $this->domain = $domain;
        return $this;
    }
    /* @var string  端口号 */
    protected $port = '';

    /**
    * @return string;
    */
    abstract public function getport():string;
    
    /**
    * @param string $port;
    * @return $this
    */
    protected function setport(string $port)
    {
        $this->port = $port;
        return $this;
    }
    /* @var string  请求路径 */
    protected $path = '';

    /**
    * @return string;
    */
    abstract public function getpath():string;
    
    /**
    * @param string $path;
    * @return $this
    */
    protected function setpath(string $path)
    {
        $this->path = $path;
        return $this;
    }
    /* @var array  请求的参数,?之后的内容 */
    protected $query = [];

    /**
    * @return array;
    */
    abstract public function getquery():array;
    
    /**
    * @param array $query;
    * @return $this
    */
    protected function setquery(array $query)
    {
        $this->query = $query;
        return $this;
    }
}
