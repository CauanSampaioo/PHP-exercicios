//exibir a tabuada de qualquer número

<?php
$tabuada = 7;

echo 'for' .PHP_EOL;
for($i = 1; $i <= 10; $i++){
    $resultado = $tabuada * $i;
    echo "$tabuada X $i = $resultado" .PHP_EOL;
}

echo PHP_EOL;

$i = 1;
echo 'while' .PHP_EOL;
while($i <= 10){
    $resultado = $tabuada * $i;
    echo "$tabuada X $i = $resultado" .PHP_EOL;
    $i++;
}