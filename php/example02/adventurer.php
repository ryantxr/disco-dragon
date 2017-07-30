<?php


class Adventurer {
    
    public $race;               // Elf, Human, Orc, Ogre
    public $characterClass;     // Fighter, Mage, Thief, Cleric, Paladin
    public $name;               // Character's name
    public $strength;           // How strong is this character
    public $intelligence;       // How smart is this character


    public $inventory = [];
    public $handler;

    function __construct($name, $race, $characterClass, $handler=null) {
        $this->characterClass = $characterClass;
        $this->name = $name;
        $this->race = $race;
        $this->handler = $handler;
        $this->initialIntelligence($characterClass);
        $this->initialStrength($characterClass);
    }

    private function initialIntelligence($characterClass) {
        $this->intelligence = 63;
    }

    private function initialStrength($characterClass) {
        $this->strength = 42;
    }

    function out() {
        echo "**********\n";
        echo "Name: " . $this->name . "\n";
        echo "Race: " . $this->race . "\n";
        echo "Character Class: " . $this->characterClass . "\n";
        echo "Strength: " . $this->strength . "\n";
        echo "Intelligence: " . $this->intelligence . "\n";


        if ( $this->handler && ! $this->handler->daytime) {
            echo "Sleeping ...\n";
        }
        else {
            echo "Awake ...\n";
        }
        echo implode("\n", $this->inventory) . "\n";
    }


}




// print_r($a);


class AdventurerHandler {

    public $adventurers = [];
    public $daytime = true;

    function process() {
        foreach ($this->adventurers as $adventurer) {
            $adventurer->out();
        }
    }


    function addAdventurer($name, $race, $class) {
        $adventurer = new Adventurer($name, $race, $class, $this);
        $this->adventurers[] = $adventurer;
        return $adventurer;
    }

}

$handler = new AdventurerHandler;

$handler->addAdventurer('Fred',     'Human',    'Warrior');
$handler->addAdventurer('Jake',     'Orc',      'Warrior');
$handler->addAdventurer('Sally',    'Elf',      'Cleric');
$handler->addAdventurer('Steve',    'Dwarf',    'Warlock');
$handler->addAdventurer('June',     'Orc',      'Thief');
$handler->addAdventurer('April',    'Human',    'Warrior');
$handler->addAdventurer('Joli',     'Orc',      'Thief');
$handler->addAdventurer('Archie',   'Human',    'Cleric');
$handler->addAdventurer('Wen',      'Dwarf',    'Warlock');
$handler->addAdventurer('Eunbank',  'Elf',      'Warrior');
$handler->process();

$handler->daytime = false;
$handler->process();

