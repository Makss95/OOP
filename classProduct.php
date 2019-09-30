<?php
class Product{
    var $name;
    var $price;

    function __construct($name,$price){
        $this->name = $name;
        $this->price = $price;
}
    function info(){
        echo "Компьютер".$this->name."стоит".$this->price."<hr>";
    }

}
