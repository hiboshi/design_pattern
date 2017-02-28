<?php
/**
 * 适配器模式
 * Created by PhpStorm.
 * User: xiaoxingxing
 * Date: 2017/2/28
 * Time: 23:28
 */

/*
 * 定义适配器接口
 */
interface Target {
    public function method1();
    public function method2();
}

/**
 * 定义老类
 */
class oldClass {
    /**
     * 老类的构造方法
     */
    public function method1() {
        echo "old method1\n";
    }
}


class Adapter extends oldClass implements Target {

    /*** 委派oldClass
     * Adapter constructor.
     * @param oldClass $adapter
     */
    function __construct(oldClass $adapter)
    {
        $this->_adapter = $adapter;
    }

    /****
     * 委派调用oldclass的method1方法
     */
    public function method1()
    {
        $this->_adapter->method1();
    }


    public function method2() {
        echo "new method2\n";
    }
}


$old = new oldClass();
$old->method1();
$adapter = new Adapter($old);
$adapter->method1();//通过Adapter 类委派去访问oldClass
$adapter->method2();