<?php
/**
 * Created by PhpStorm.
 * User: frank.liu
 * Date: 2019/11/19
 * Time: 11:22 AM
 * Version: v1.0
 * Email: liuboserehi@gmail.com
 * Description:
 * 代码千万行，注释第一行。
 * 编码不规范，接盘两行泪。
 */
class Context {

    private $f;

    function __construct( $object )
    {
        $this->f = $object;
    }

    function dowork() {
        $this->f->do();
    }
}
