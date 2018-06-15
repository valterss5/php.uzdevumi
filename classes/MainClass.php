<?php
class MainClass
{
var $numberOne = 0;
var $numberTwo = 0;
    public function showPhpVersion(){
        echo phpversion();
    }
    public function showText($string){
        echo $string;
    }
    public function numberOne($number1){
        $this->numberOne = $number1;
    }
    public function numberTwo($number2){
        $this->numberTwo = $number2;
    }
    public function getSum(){
        $sum=$this->numberOne+$this->numberTwo;
        echo $sum;

    }
}