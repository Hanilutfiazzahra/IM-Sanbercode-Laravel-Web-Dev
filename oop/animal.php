<?php
class Animal {
    public string $name;
    public int $legs = 4;
    public string $cold_blooded = "no";

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function get_name() { return $this->name; }
    public function get_legs() { return $this->legs; }
    public function get_cold_blooded() { return $this->cold_blooded; }
}
