<?php
namespace xltxlm\url\Url\Url_Noquery;

use \xltxlm\url\Basic\UrlTrait;

/**
 * 不带请求参数的路径;
*/
abstract class Url_Noquery_implements
{
    use UrlTrait;

    /* @var array  保留的上请求的参数 */
    protected $Keep_Args = [];

    /**
    * @return array;
    */
    public function getKeep_Args():array
    {
        return $this->Keep_Args;
    }

    /**
    * @param  $Keep_Args;
    * @return $this
    */
    public function setKeep_Args_Row($Keep_Args)
    {
        $this->Keep_Args[] = $Keep_Args;
        return $this;
    }

    /**
    * @param array $Keep_Args;
    * @return $this
    */
    public function setKeep_Args(array $Keep_Args)
    {
        $this->Keep_Args = $Keep_Args;
        return $this;
    }
    /**
    *  ;
    *  @return :string;
    */
    abstract public function __invoke():string;
}
