<?php

class CarStore {

    public function __construct() {
        $this->CarFactory = new CarFactory();
    }

    public function buyCar($brand) {
        $car = $this->CarFactory->create($brand);
        $this->fillGas();
        return $car;
    }

    public function fillGas() {
        echo 'Gas filled<hr>';
    }

}
