<?php


class Adventurer {
    
    public $class;
    public $name;
    public $inventory = [];

    function __construct($name, $class) {
        $this->class = $class;
        $this->name = $name;
    }

    function addItem($itemName) {
        $this->inventory[] = $itemName;
    }

    function out() {
        echo "**********\n";
        echo "Name: " . $this->name . "\n";
        echo "Class: " . $this->class . "\n";
        echo "You have ";
        if ( count($this->inventory) ) {
            echo "\n  " . implode("\n  ", $this->inventory) . "\n";
        }
        else {
            echo "no items\n";
        }
    }
}

$adventurer = new Adventurer('Jen', 'Warrior');


//print_r($adventurer);

$adventurer->out();

$adventurer->addItem('Sword');
$adventurer->addItem('Lantern');

$adventurer->out();
