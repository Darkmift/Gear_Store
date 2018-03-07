<?php

class CarStore {

    public function __construct() {
        $this->CarFactory = new CarFactory();
    }

    public function buyCar($brand) {
        $this->CarFactory->create($brand);
        $this->fillGas();
    }

    public function fillGas() {
        echo 'Gas filled<hr>';
    }

}
