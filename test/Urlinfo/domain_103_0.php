<?php

namespace xltxlm\url\test\Urlinfo;
use xltxlm\url\Urlinfo;

/**
 *
 */
class domain_103_0
{

    public function __invoke()
    {
        $getdomain = (new Urlinfo("https://www.oschina.net:5528/news/101283/jpress-1-0-rc3-released"))
            ->getdomain();
        \xltxlm\helper\Util::d($getdomain);

        assert($getdomain == 'oschina.net');
    }

}

