<?php

$peso = 75;
$altura = 1.78;

$imc = $peso / ($altura*$altura);

echo "O seu IMC é = $imc" .PHP_EOL;

if($imc <= 18){
    echo "O seu IMC de $imc está baixo";
}else if($imc >+ 25){
    echo "O seu IMC de $imc está alto";
}else{
    echo"Seu IMC de $imc está bom";
}