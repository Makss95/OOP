<?php
include "Generate.php";
$productName = ["HP","Macbook","Lenovo"];
$productCount = rand(5,10);

$sklad = new Sklad();
for($i=0; $i<$productCount;$i++){
    $product[$i] = $sklad->generate($productName[rand(0,count($productName)-1)]);
}
for($i=0; $i<$productCount;$i++){
    echo "Компьютер".$product[$i]->name."стоит".$product[$i]->price."<hr>";
}