<?php

namespace xltxlm\url\test\Url\Url_Noquery;

use xltxlm\url\Url\Url_Noquery;

/**
 *
 */
class 只返回路径_169_0
{
    public function __invoke()
    {
        $url = "https://admin.abc.com:30619/dd/cc?c=Video_management/Video_management_jingxuanCross&crossviewid=632&prepage=10&sametime=false&add_time%5B%5D=2018-11-04&add_time%5B%5D=2018-11-10";

        $Url_Noquery = (new Url_Noquery($url))
            ->__invoke();
        p($Url_Noquery);
        assert(strpos($Url_Noquery, '?') === false);

        $url = "https://admin.abc.com/dd/cc?c=Video_management/Video_management_jingxuanCross&crossviewid=632&prepage=10&sametime=false&add_time%5B%5D=2018-11-04&add_time%5B%5D=2018-11-10";

        $Url_Noquery = (new Url_Noquery($url))
            ->__invoke();
        p($Url_Noquery);
        assert(strpos($Url_Noquery, '?') === false);
    }
}
