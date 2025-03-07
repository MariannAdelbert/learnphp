<?php
// comments are this way

/*
plapla
plapla
*/

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

pla