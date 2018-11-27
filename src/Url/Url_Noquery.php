<?php

namespace xltxlm\url\Url;

use xltxlm\url\Urlinfo;

/**
 * 不带请求参数的路径;
 */
class Url_Noquery extends Url_Noquery\Url_Noquery_implements
{

    public function __invoke(): string
    {
        $urlinfo = new Urlinfo($this->getURL());
        $Keep_Args = [];
        if (empty($this->getKeep_Args()) == false) {
            foreach ($this->getKeep_Args() as $keep_Arg) {
                $Keep_Args[$keep_Arg] = $urlinfo->getquery()[$keep_Arg];
            }
        }

        $urlpath = $urlinfo->getscheme() . '//' . $urlinfo->gethost() . ':' . $urlinfo->getport() . '/' . $urlinfo->getpath();

        $queryString = '';
        if (empty($Keep_Args) == false) {
            $queryString = '?' . http_build_query($Keep_Args);
        }
        return $urlpath . $queryString;
    }

}
