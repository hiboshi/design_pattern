<?php
/**
 * Created by PhpStorm.
 * User: frank.liu
 * Date: 2019/11/19
 * Time: 11:30 AM
 * Version: v1.0
 * Email: liuboserehi@gmail.com
 * Description:
 * 代码千万行，注释第一行。
 * 编码不规范，接盘两行泪。
 */
require './functionA.php';
require './functionB.php';
require './functionC.php';
require 'Context.php';
$fn = 'C';
if ( $fn == 'A' ) {
    $o = new functionA();
} else if ( $fn == 'B' ) {
    $o = new functionB();
} else if ( $fn == 'C' ) {
    $o = new functionC();
}

$a = new Context($o);
$a->dowork();
