<?php

namespace xltxlm\url\test\Urlinfo;

use xltxlm\url\Urlinfo;

/**
 *
 */
class path_123_0
{

    public function __invoke()
    {
        $getpath = (new Urlinfo("https://www.oschina.net:5528/news/101283/jpress-1-0-rc3-released"))
            ->getpath();
        \xltxlm\helper\Util::d($getpath);

        assert($getpath == '/news/101283/jpress-1-0-rc3-released');
    }

}

