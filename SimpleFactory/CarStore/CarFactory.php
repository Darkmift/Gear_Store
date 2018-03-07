<?php

class CarFactory {

    public function create($brand) {
        switch ($brand) {
            case 'Jeep':
                $car = $this->car = new Jeep($brand);
                break;
            case 'Dodge':
                $car = $this->car = new Dodge($brand);
                break;
            case 'ford':
                $car = $this->car = new Ford($brand);
                break;
            default:
                echo 'car brand not matched';
        }
        return $car;
    }

}
