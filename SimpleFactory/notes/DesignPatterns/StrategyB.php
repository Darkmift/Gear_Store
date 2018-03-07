<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface SortStrategy {

    public function sort();
}

class QuickSort {

    private $data;

    public function __construct(Array $data) {
        $this->data = $data;
    }

    public function sort() {
        
    }

}

////
class MergeSort {

    private $data;

    public function __construct(Array $data) {
        $this->data = $data;
    }

    public function sort() {
        
    }

}

////
function sort(Array $param) {
    if (count($param > 20)) {
        $tempData = new QuickSort($data);
    } else {
        $tempData = new MergeSort($data);
    }
    $tempData->sort();
}

$data = array(5, 17, 8, 99, 85, 3, 77, 96);
sort($data);
