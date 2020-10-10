<?php 

//Arreglos de una dimension
$precios=array("precio1"=>1600,"precio2"=>5000,"precio3"=>2500);
$nombres=array("arroz","salchicha","azucar");
$marca=array("diana","zenu","incauca");

//arreglos en multiples dimensiones
$productos=array(
    "producto1"=>array("arroz",1600,"diana"),
    "producto2"=>array("salchicha",5000,"zenu"),
    "producto3"=>array("azucar",2500,"incauca")
);

print_r($productos);


?>