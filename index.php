<?php
interface test{
    public function sleep();
    public function eat();
}

abstract class test2{
    function __construct(){
        $this->config=array(111);
    }
    //必须实现安装
    abstract public function install();
}
abstract class test3{
    function __construct(){
        $this->config=array(222);
    }
    //必须卸载插件方法
    abstract public function uninstall();
}

class intest implements test{
    public function sleep(){
        echo 'function sleep';
    }
    public function eat(){
        echo 'function eat';
    }
}
$a=new intest();
$a->sleep();


class abtest extends  test2{
    function index(){
        echo 1213;
    }
    public function install(){
        echo 'function uninstall';
    }
}
$b=new abtest();
$b->install();
?>
