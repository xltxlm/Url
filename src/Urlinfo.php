<?php

namespace xltxlm\url;

/**
 * 获取网址的基础信息;
 */
class Urlinfo extends Urlinfo\Urlinfo_implements
{
    protected $parse_url = [];


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
        return $this->host = strtolower($this->parse_url['host']);
    }

    public function getdomain(): string
    {
        $gethost = $this->gethost();
        $gethosts = explode('.', $gethost);
        $gethosts_new = array_slice($gethosts, -2);
        return $this->domain = join('.', $gethosts_new);
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

    public function getpath(): string
    {
        parent::setpath($this->parse_url['path']);
        return $this->path;
    }

    public function getquery(): array
    {
        $parse_str = [];
        parse_str($this->parse_url['query'], $parse_str);
        return $parse_str;
    }


}