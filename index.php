<?php
// comments are this way
/*
echo 'Hello World ';

$var = 'Mariann'; //string
$var = 4; //int
$var = 3.4; //float
$var = true; //boolean
$var = false; //bool
$var = null; //null
$var = ['hello', 2, 4, true];  //array
$var = new StdClass(); //object
var_dump($var);
$var = ['hello', 2, 4, true];

foreach($var as $key=>$value) {
    var_dump($value);
}

$var = [
    'name'=> 'Mariann',
    'age' => '27',
    'hasCat' => false,
    22,
    'pla',
];

var_dump($var);
var_dump($var[0]);
var_dump($var['name']);

function hello($name){
    echo 'Hello ' . $name; //teksti liitmine käib . (punktiga, mitte +)
}

hello('Mariann');

$name = 'Mari-Ann';
echo " don't be \n an a** $name";
*/

// <?php see peab ka alguses olema

class Box {
    public $width;
    public $height;
    public $length;

    public function volume(){
        return $this-> width * $this-> height * $this-> length;
    }
}

$box1 = new Box();
$box1->width = 10;
$box1->height = 20;
$box1->length = 30;
var_dump($box1);
var_dump($box1->volume());

$box2 = new Box();
$box2->width = 40;
$box2->height = 60;
$box2->length = 50;
var_dump($box2);
var_dump($box2->volume());
var_dump($box1);
