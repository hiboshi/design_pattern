<?php
/**
 * Created by PhpStorm.
 * User: xiaoxingxing
 * Date: 2017/1/9
 * Time: 21:53
 */

error_reporting(0);

$config = array(
    'type'=>"计算机",
    'price'=>"100.00",
    'color'=>"白色"
);

class product {

    public $_type = null;
    public $_price = null;
    public $_color = null;

    public function setType($type) {
        $this->_type = $type;
    }

    public function setPrice($price) {
        $this->_price = $price;
    }

    public function setColor($color) {
        $this->_color = $color;
    }

    public function getType() {
        return $this->_type;
    }

    public function getPrice() {
        return $this->_price;
    }

    public function getColor() {
        return $this->_color;
    }

}


$productObj = new product();
$productObj->setType($config['type']);
$productObj->setPrice($config['price']);
$productObj->setColor($config['color']);


class builderProduct {

    public $product = null;

    public $data  = array();

    public function __construct($data)
    {
        $this->product = new product();
        $this->data = $data;
    }

    public function setProduct ($config) {
        $this->product->_type = $config['type'];
        $this->product->_price = $config['price'];
        $this->product->_color = $config['color'];
    }

    public function getProduct () {
        return$this->product;
    }

}

$builderObj = new builderProduct();
$builderObj->setProduct($config);

$ProductObj = $builderObj->getProduct();

echo $ProductObj->getType()."\n";
echo $ProductObj->getPrice()."\n";
echo $ProductObj->getColor()."\n";