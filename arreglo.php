<?php  

//Arreglo indexado
$productos=array(2,4,6);
print_r($productos);
echo("<br>");
echo($productos[1]);


//Arreglos asociativos
echo("<br>");
echo("<br>");
$productosAsociativos=array("producto1"=>"lentejas","producto2"=>"papa","producto3"=>"huevos");
print_r($productosAsociativos);
echo("<br>");
echo($productosAsociativos["producto2"]);

//bucle for
echo("<br>");
echo("<br>");
for($centinela=0; $centinela<count($productos); $centinela++){

    echo($productos[$centinela]);
    echo("<br>");

}

//bucle foreach
echo("<br>");
echo("<br>");
foreach($productos as $valor){   
    echo($valor);
    echo("<br>");
}


?>