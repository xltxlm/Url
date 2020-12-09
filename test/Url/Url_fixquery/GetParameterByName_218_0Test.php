<?php

namespace xltxlm\url\test\Url\Url_fixquery;

use PHPUnit\Framework\TestCase;
use xltxlm\url\Url\Url_fixquery;

/**
 *
 */
class GetParameterByName_218_0Test extends TestCase
{
    use GetParameterByName_218_0Test\GetParameterByName_218_0Provider; #<---本次测试的数据供给来源

    /**
     * @test
     * @dataProvider MyProvider <---本次测试的数据供给来源
     * $input 输入值
     * $expected 期望的结果
     */
    public function __invoke($input, $expected, $args)
    {
        $result = $this->runcode($input, $args);
        //最终进行判断
        $this->assertEquals($expected, $result);
    }

    /**
     * 真正的逻辑计算
     * $input 输入值
     * $expected 期望的结果
     */
    private function runcode($input, $args)
    {
        return (new Url_fixquery($input))
            ->GetParameterByName($args);
    }

}

