<?php

class CarFactory {

    public function create($brand) {
        switch ($brand) {
            case 'Jeep':
                $this->car = new Jeep();
                break;
            case 'Dodge':
                $this->car = new Dodge();
                break;
            case 'ford':
                $this->car = new Ford();
                break;
            default:
                echo 'car brand not matched';
        }
    }

}
