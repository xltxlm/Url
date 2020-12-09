<?php
namespace xltxlm\url\Url\Url_fixquery;

use \xltxlm\url\Basic\UrlTrait;
/**
 * :类;
 * 对网址增删改参数;
*/
abstract class Url_fixquery_implements
{

    use UrlTrait;

/* @var array   */
    protected $Parameters = [];





    /**
    * ;
    * @return array;
    */
            public function getParameters():array        {
                return $this->Parameters;
        }

    
    




/**
* @param array $Parameters;
* @return $this
*/
    public function setParameters(array $Parameters  = [])
    {
    $this->Parameters = $Parameters;
    return $this;
    }



/* @var string  除掉参数外，其他的所有路径 */
    protected $basicinfo = '';





    /**
    * 除掉参数外，其他的所有路径;
    * @return string;
    */
            public function getbasicinfo():string        {
                return $this->basicinfo;
        }

    
    




/**
* @param string $basicinfo;
* @return $this
*/
    public function setbasicinfo(string $basicinfo  = "")
    {
    $this->basicinfo = $basicinfo;
    return $this;
    }



/* @var string  请求的参数，会被外部动态改变 */
    protected $query = '';





    /**
    * 请求的参数，会被外部动态改变;
    * @return string;
    */
            abstract public function getquery():string;
    
    




/**
* @param string $query;
* @return $this
*/
    public function setquery(string $query  = "")
    {
    $this->query = $query;
    return $this;
    }



/**
*  ;
*  @return ;
*/
abstract public function GetParameterByName(string $name = null);
    /**
    * @return $this
    */
    function GetParameterByName_this(string $name = null)
    {
        $this->GetParameterByName($name);
        return $this;
    }
/**
*  ;
*  @return ;
*/
abstract public function SetParameterByName(string $name = null, $value = null);
    /**
    * @return $this
    */
    function SetParameterByName_this(string $name = null, $value = null)
    {
        $this->SetParameterByName($name,$value);
        return $this;
    }
/**
*  ;
*  @return ;
*/
abstract public function UnSetParameterByName(string $name = null);
    /**
    * @return $this
    */
    function UnSetParameterByName_this(string $name = null)
    {
        $this->UnSetParameterByName($name);
        return $this;
    }
/**
*  ;
*  @return ;
*/
abstract public function __invoke();
}