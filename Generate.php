<?php
include "classProduct.php";
class Sklad{
    function generate($name){
        return new Product($name, rand(1000,5000));
    }
}