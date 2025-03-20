<?php

class Person {
    public $name;
    static public $count;

    public static function example(){
        var_dump(static::$count);
        var_dump(static::class);
        var_dump(self::class);
    }

    public function getCount(){
        var_dump(static::$count);
    }
}

class Client extends person {
    static public $count = 30;
}

$person = new person();
$person -> getCount();

person::$count = 1;

person::$count = 2;

person::example();
Client::example();

var_dump(person::$count, person::$count);