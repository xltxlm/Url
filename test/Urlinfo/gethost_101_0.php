<?php

namespace xltxlm\url\test\Urlinfo;

use xltxlm\url\Urlinfo;

/**
 *
 */
class gethost_101_0
{

    public function __invoke()
    {
        $gethost = (new Urlinfo("https://www.oschina.net:5528/news/101283/jpress-1-0-rc3-released"))
            ->gethost();
        \xltxlm\helper\Util::d($gethost);

        assert($gethost == 'www.oschina.net');
    }

}

