<?php
namespace xltxlm\url\Urlinfo;

use \xltxlm\url\Basic\UrlTrait;
/**
 * 获取网址的基础信息;
*/
abstract class Urlinfo_implements
{

    use UrlTrait;


    /* @var string 协议:http/s */
        protected $scheme = '';
    


    /**
     * @return string;
     */
    public function getscheme():string    {
        return $this->scheme;
    }




    /**
     * @param string $scheme;
     * @return $this
     */
    protected function setscheme(string $scheme)
    {
        $this->scheme = $scheme;
        return $this;
    }

    /* @var string 主机头,和域名不一样,域名只有2位 */
        protected $host = '';
    


    /**
     * @return string;
     */
    public function gethost():string    {
        return $this->host;
    }




    /**
     * @param string $host;
     * @return $this
     */
    protected function sethost(string $host)
    {
        $this->host = $host;
        return $this;
    }

    /* @var string 类似xx.com. www部分不要 */
        protected $domain = '';
    


    /**
     * @return string;
     */
    public function getdomain():string    {
        return $this->domain;
    }




    /**
     * @param string $domain;
     * @return $this
     */
    protected function setdomain(string $domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /* @var string 端口号 */
        protected $port = '';
    


    /**
     * @return string;
     */
    public function getport():string    {
        return $this->port;
    }




    /**
     * @param string $port;
     * @return $this
     */
    protected function setport(string $port)
    {
        $this->port = $port;
        return $this;
    }

    /* @var string 请求路径 */
        protected $path = '';
    


    /**
     * @return string;
     */
    public function getpath():string    {
        return $this->path;
    }




    /**
     * @param string $path;
     * @return $this
     */
    protected function setpath(string $path)
    {
        $this->path = $path;
        return $this;
    }

}