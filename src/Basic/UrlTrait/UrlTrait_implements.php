<?php
namespace xltxlm\url\Basic\UrlTrait;

/**
 * 所有基于字符串的类,都必须引入的基础;
*/
trait UrlTrait_implements
{

/* @var string  网址 */
    protected $URL = '';

    /**
    * @return string;
    */
    public function getURL():string
    {
        return $this->URL;
    }

    /**
    * @param string $URL;
    * @return $this
    */
    public function setURL(string $URL)
    {
        $this->URL = $URL;
        return $this;
    }
}
