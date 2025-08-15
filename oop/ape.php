<?php
require_once __DIR__ . '/Animal.php';

class Ape extends Animal {
    public function __construct(string $name) {
        parent::__construct($name);
        $this->legs = 2; 
    }
    public function yell() {
        echo "Auooo";
    }
}

