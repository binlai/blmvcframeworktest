<?php
namespace frontend\controllers;
use frontend\Views;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/25
 * Time: 15:02
 */
class IndexController{
    public function __construct()
    {
    }

    public function index(){
        $views = new Views("index");
        $views -> data = [
            "title" => "我的第一个mvc框架"
        ];
        return $views -> show();
    }
}