<?php

class Car {
    public $model;
    public $year;
    public function drive(){
        return 'driving';
    }
    public function getFuel(){
        return 'fuelling';
    } public function setModal(){
        $this->model = $model;
    }
}


$bmw = new Car(); // Yangi object yaratish uchun new kalit so'zi bn!!!

$bmw ->setModal('Bmw');
$bmw ->year = 2023;