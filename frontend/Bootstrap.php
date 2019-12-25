<?php
namespace frontend;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/25
 * Time: 15:22
 */
class Bootstrap{
    public function __construct()
    {
    }

    /**
     * Notes:
     * User: 斌少
     * Date: 2019/12/25
     * Time: 16:05
     * @throws \Exception
     */
    public static function run(){
        $p = $_GET;
        if(!isset($p["r"]))
            throw new \Exception("Not Found 404");
        $r = explode("/",$p["r"]);

        if(count($r) < 2)
            throw new \Exception("Bad Request.");

        $c = $r[0];
        $a = $r[1];

        $c_basenamespace = "frontend\controllers";

        /**
         * 调用控制器
         */
        $c_ns = $c_basenamespace . DIRECTORY_SEPARATOR . ucfirst($c) ."Controller";

        /**
         * 执行action
         */
        return (new $c_ns()) -> $a();
    }
}