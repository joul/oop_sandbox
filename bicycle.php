<?php

class Bicycle{
    var $brand;
    var $model;
    var $year;
    var $description = 'Used bicycle';
    var $weight_kg = 0.0;

    function name(){
        echo $this->brand."-".$this->model."-".$this->year;
    }

    function weight_lbs(){
        return floatval($this->weight_kg) * 2.2046226218;
    }
}

$trek = new Bicycle;
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->year = '2017';
$trek->weight_kg = 1.0;

$yamaha = new Bicycle;
$yamaha->brand = 'Yamaha';
$yamaha->model = 'Mvd 26';
$yamaha->year = '2019';
$yamaha->weight_kg = 2.0;