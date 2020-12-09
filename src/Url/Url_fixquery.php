<?php

namespace xltxlm\url\Url;

use \xltxlm\url\Basic\UrlTrait;

/**
 * 对网址增删改参数;
 */
class Url_fixquery extends Url_fixquery\Url_fixquery_implements
{
    public function setURL(string $URL)
    {
        parent::setURL($URL);
        $parse_url = parse_url($this->getUrl());
        if (isset($parse_url['port'])) {
            $this->setbasicinfo(sprintf("%s://%s:%d%s", $parse_url['scheme'], $parse_url['host'], $parse_url['port'], $parse_url['path']));
        } else {
            $this->setbasicinfo(sprintf("%s://%s%s", $parse_url['scheme'], $parse_url['host'], $parse_url['path']));
        }
        parse_str($parse_url['query'], $this->Parameters);
    }

    public function getquery(): string
    {
        $Parameter = array_diff($this->Parameters, ['', null]);
        $query = http_build_query($Parameter);
        $this->setQuery($query);
        return $query;
    }


    public function GetParameterByName(string $name = null)
    {
        return $this->getparameters()[$name];
    }

    public function SetParameterByName(string $name = null, $value = null)
    {
        $this->Parameters[$name] = $value;
    }

    public function UnSetParameterByName(string $name = null)
    {
        unset($this->Parameters[$name]);
    }

    public function __invoke()
    {
        return sprintf("%s?%s", $this->getbasicinfo(), $this->getQuery());

    }


}