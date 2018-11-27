<?php

namespace xltxlm\url\Basic;

/**
 * 所有基于字符串的类,都必须引入的基础;
 */
Trait UrlTrait
{
    use UrlTrait\UrlTrait_implements;

    /**
     * Urlinfo constructor.
     */
    public function __construct(string $Url = '')
    {
        if ($Url) {
            $this->setURL($Url);
        } else {
            $http = "http" . ($_SERVER['HTTPS'] || $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' ? 's' : '');
            $this->setURL($http . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
        }
    }


}