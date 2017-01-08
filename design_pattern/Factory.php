<?php

/**
 * 工厂模式
 * Created by PhpStorm.
 * User: xiaoxingxing
 * Date: 2017/1/8
 * Time: 20:19
 */

//定义接口
interface product {
    public function produce();
}

//抽象工厂
class sms_sender implements product {
//return new sms_sender();
    public function produce()
    {
        // TODO: Implement send() method.
        return new sms_factory();
    }

}
//抽象工厂
class email_sender implements product {
    public function produce()
    {
        // TODO: Implement send() method.
        return new email_factory();
    }

}

interface sender {
    public function send();
}

//功能实现
class sms_factory implements sender  {
    public function send()
    {
        // TODO: Implement produce() method.
        print_r("sms-send\n");
    }
}
//功能实现
class email_factory implements sender {
    public function send()
    {
        // TODO: Implement produce() method.
        print_r("email-send\n");
    }
}

class client {

    public static function main() {
        $sms = new sms_sender();
        $sms = $sms->produce();
        $sms->send();

        $email = new email_sender();
        $email = $email->produce();
        $email->send();
    }
}

client::main();