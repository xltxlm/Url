<?php
namespace xltxlm\url\test\Url\Url_fixquery\GetParameterByName_218_0Test;

/**
* 测试案例的数据供给
*/
Trait GetParameterByName_218_0Provider {

    /**
     * 测试的数据供给器
     */
    public function MyProvider(){
        return [
        ["https://xx.com/a.php?c=aa/cc&dd=1","1","dd",""],
        ];
    }
}

