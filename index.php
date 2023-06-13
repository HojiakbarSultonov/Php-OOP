<?php
//
//class Car {
//    public $model;
//    public $year;
//    public function drive(){
//        return 'driving';
//    }
//    public function getFuel(){
//        return 'fuelling';
//    }
////    public function setModal(){
////        $this->model = $model;
////    }
//}
//
//
//$bmw = new Car(); // Yangi object yaratish uchun new kalit so'zi bn!!!
//
////$bmw ->setModal('Bmw');
//$bmw ->year = 2023;

class Product {
    public $name;
    public $weight;


    public function __construct($name, $weight )
    {
        $this->name = $name;
        $this->weight = $weight;
    }
}


$prod = new Product('Apple', '100gr');

echo ($prod->name);
echo ($prod->weight);
