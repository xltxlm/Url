<?php

namespace xltxlm\url\test\Urlinfo;
use xltxlm\url\Urlinfo;

/**
 *
 */
class scheme_102_0
{

    public function __invoke()
    {
        $getscheme = (new Urlinfo("https://www.oschina.net:5528/news/101283/jpress-1-0-rc3-released"))
            ->getscheme();
        \xltxlm\helper\Util::d($getscheme);

        assert($getscheme == 'https');

        $getscheme = (new Urlinfo("HTTPS://www.oschina.net:5528/news/101283/jpress-1-0-rc3-released"))
            ->getscheme();
        \xltxlm\helper\Util::d($getscheme);

        assert($getscheme == 'https');
    }

}

