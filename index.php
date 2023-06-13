<?php
//class ======================================

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

//construct=======================================

//class Product {
//    public $name;
//    public $weight;
//
//
//    public function __construct($name, $weight )
//    {
//        $this->name = $name;
//        $this->weight = $weight;
//    }
//}
//
//
//$prod = new Product('Apple', '100gr');
//
//echo ($prod->name);
//echo ($prod->weight);

//inheritance(vorislanish)=====================================
//extends
//parent-child
//overridding
//final --- bu funksiyani oldiga yoki clasni oldiga qoyish mumkn. final yozilsa umuman u classdan voris olip bolmaydi!!!





class Car {
    public $model;
    public $year;
    public function __construct($model, $year)
    {
        $this->model=$model;
        $this->year = $year;
    }


    public function driving()
    {
        return 'Driving Car ';
    }
}


class PublicCar extends Car{
    public $Ballon;

    //OVERRIDDING cardagi driving funksiyasini ustidan yozish
    public function driving()
    {
        return 'Driving PublicCar ';
    }


}

$bus = new PublicCar('Mersedes', '2023' );

//var_dump($bus->Ballon = '20');
//var_dump($bus-


// Access Modifiers===================================================
//public -----istalgan joyda ishlatsa bo'ladi
//private---- faqat classni ichida ishlaydi
//protected---- faqat ozini va extend qilingan classlarda ishlaydi



//Abstract classlar(Mavhum classlar)==================================================
//Abstract classlar faqat bola elementlar orqali clas yasaladi


//interface ===========================================================

interface Animal {
//    public function makeSound();
    public function Eat();
}


//class Dog implements Animal{
//    public function makeSound()
//    {
//       return 'Vov vov';
//    }
//    public function Eat()
//    {
//        return 'Eating meat';
//    }
//}



trait AnimalTrait{
    public function Eat()
    {
        return 'Eating meat';
    }
};

class Dog implements Animal{
    use AnimalTrait;

    public function make()
    {
        return 'vow vow';
    }
};

$dog = new Dog;

var_dump($dog->Eat());
