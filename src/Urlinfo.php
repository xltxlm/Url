<?php

namespace xltxlm\url;

/**
 * 获取网址的基础信息;
 */
class Urlinfo extends Urlinfo\Urlinfo_implements
{
    protected $parse_url = [];

    /**
     * Urlinfo constructor.
     */
    public function __construct(string $Url = '')
    {
        if ($Url) {
            $this->setURL($Url);
        } else {
            $this->setURL($_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
        }
    }


    public function setURL(string $URL)
    {
        $this->parse_url = parse_url($URL);
        return parent::setURL($URL);
    }


    public function getscheme(): string
    {
        return strtolower($this->parse_url['scheme']);
    }

    public function gethost(): string
    {
        return strtolower($this->parse_url['host']);
    }

    public function getdomain(): string
    {
        $gethost = $this->gethost();
        $gethosts = explode('.', $gethost);
        $gethosts_new = array_slice($gethosts, -2);
        return join('.', $gethosts_new);
    }

    public function getport(): string
    {
        if (empty($this->parse_url['port'])) {
            if ($this->getscheme() == 'http') {
                return 80;
            }
            if ($this->getscheme() == 'https') {
                return 443;
            }
        }
        return $this->parse_url['port'];
    }


}