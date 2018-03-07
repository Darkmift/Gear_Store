<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface Shape {

    public function draw();
}

class Rectangle implements Shape {

    public $x;

    public function draw() {
        echo "drawing a rectange";
    }

}

function drawStuff(Shape $shape) {
    $shape->draw();
}

$shape = new Rectangle();
drawStuff($shape);
