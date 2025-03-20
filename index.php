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

/*
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
*/
/*
$var1 = 1;
$var2 = $var1;
$var2 = 2;
var_dump($var1);

$box1 = new Box();
$box1->height = 1;
$box2 = $box1;
$box2->height = 2;
var_dump($box1->height); //objektide sättimine töötab teisel põhimõttel
var_dump($box1);
var_dump($box2);
*/
/*
class Box {
    public $width;
    protected $height;
    private $length;

    public function volume(){
        return $this-> width * $this-> height * $this-> length;
    }
    public function visibility() {
        $this->width = 2;
        var_dump($this->width);
    }
}

class MetalBox extends Box {
    public $weightPerUnit;
    public $material = 'Metal';
    public function mass (){
        return $this->volume() * $this->weightPerUnit;
    }
    public function childVisibility() {
        $this->length = 2;
        var_dump($this->length);
    }
}

$box1 = new MetalBox();
$box1->visibility();
$box1->childVisibility();
$box1->length = 2;
var_dump($box1->length);



class Box {
    public $width;  // Sa saad sellele ligi igalt poolt
    protected $height;  // Sa saad sellele ligi ainult klassis ja alamklassides
    private $length;  // Sa saad sellele ligi ainult klassis, kus see on määratud

    public function volume(){
        return $this->width * $this->height * $this->length;
    }

    public function visibility() {
        $this->width = 2;
        var_dump($this->width);  // Sa saad seda välja printida, kuna see on public
    }
}

$box = new Box();
$box->visibility();  // See töötab, kuna visibility on public
// $box->height = 5; // See ei tööta, kuna height on protected
// $box->length = 10; // See ei tööta, kuna length on private



class Cat {
    use HasWeight;
}

class Gun {
    use HasWeight, HasAmmo;
}
class crossBow {
    use HasAmmo;
}
trait Hasammo {
    public $ammo;
}

trait HasWeight {
    private $weight;

    public function getWeight(){
        return $this->weight;
    }
    public function setWeight(){
        $this->weight = $weight;
        if($weight < 0) {
            $this->$weight = 0 ;
        }
    }
}

$cat = new Cat();
$gun = new Gun();
$crossbow = new CrossBow ();
var_dump($cat, $gun, $crossbow);


*/
