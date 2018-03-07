<?php

class Ford {

    private $name;

    public function __construct($name) {
        echo "You made a " . __CLASS__ . "<hr>";
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

}
