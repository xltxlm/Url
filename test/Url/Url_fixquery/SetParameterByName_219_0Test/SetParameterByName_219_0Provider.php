<?php
namespace xltxlm\url\test\Url\Url_fixquery\SetParameterByName_219_0Test;

/**
* 测试案例的数据供给
*/
Trait SetParameterByName_219_0Provider {

    /**
     * 测试的数据供给器
     */
    public function MyProvider(){
        return [
        ["https://xx.com/a.php?c=aacc&dd=1","https://xx.com/a.php?c=aacc&dd=1&abc=ok",["abc","ok"],""],
        ];
    }
}

