<?php

namespace xltxlm\url\test\Urlinfo;

use xltxlm\url\Urlinfo;

/**
 *
 */
class query_171_0
{

    public function __invoke()
    {
        $getquery = (new Urlinfo("https://www.oschina.net:5528/news/101283/jpress-1-0-rc3-released?a=1&a=2&b=2&c[]=a&c[]=b"))
            ->getquery();
        p($getquery);

    }

}

