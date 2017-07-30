<?php


class Animal {
    
    public $species;
    public $numLegs;
    public $name;

    function __construct($species, $legs, $name) {
        $this->species = $species;
        $this->numLegs = $legs;
        $this->name = $name;
    }

    function out() {
        echo "**********\n";
        echo "Species: " . $this->species . " " . $this->name . "\n";
        echo "Number of legs: " . $this->numLegs . "\n";
    }


}



$a[] = new Animal('elephant', 4, 'Fred');
$a[] = new Animal('snake', 0, 'Jake');
$a[] = new Animal('eel', 0, 'Sally');
$a[] = new Animal('eel', 0, 'Steve');
$a[] = new Animal('eel', 0, 'June');
$a[] = new Animal('eel', 0, 'April');
$a[] = new Animal('eel', 0, 'Joli');
$a[] = new Animal('eel', 0, 'Archie');
$a[] = new Animal('eel', 0, 'Wen');
$a[] = new Animal('eel', 0, 'Eunbank');

print_r($a);

foreach ($a as $animal) {
    $animal->out();
}
