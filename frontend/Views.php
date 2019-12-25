<?php
namespace frontend;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/25
 * Time: 16:27
 */

class Views
{
    /**
     * @var string 模板后缀
     */
    public $suffix =".php";
    /**
     * @var array 传递给模板的数据
     */
    public $data = [];
    /**
     * @var string
     */
    public $view = "";
    public function __construct( $view )
    {
        $this -> view = $view;
    }

    public function make(){
        extract($this -> data);
        include "views". DIRECTORY_SEPARATOR . $this -> view .$this -> suffix;
    }

    public function show(){
        return $this;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        $this -> make();
        return "";
    }

}