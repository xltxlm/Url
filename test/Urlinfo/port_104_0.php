<?php

namespace xltxlm\url\test\Urlinfo;

use xltxlm\url\Urlinfo;

/**
 *
 */
class port_104_0
{

    public function __invoke()
    {
        $getport = (new Urlinfo("https://www.oschina.net:5528/news/101283/jpress-1-0-rc3-released"))
            ->getport();
        \xltxlm\helper\Util::d($getport);

        assert($getport == '5528');

        $getport = (new Urlinfo("https://www.oschina.net/news/101283/jpress-1-0-rc3-released"))
            ->getport();
        \xltxlm\helper\Util::d($getport);

        assert($getport == '443');
    }

}

