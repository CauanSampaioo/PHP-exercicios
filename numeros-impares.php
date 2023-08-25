//mostra de 1 a 100 todos os númros inpares
<?php
/*
for($contador = 1; $contador <= 100; $contador++){
    if($contador % 2 != 0 ){
        echo "$contador" .PHP_EOL;
    }
}

*/
                //ou

for($contador = 1; $contador <= 100; $contador++){
    if($contador % 2 == 0 ){
        continue;
    }
    echo "$contador" .PHP_EOL;
}

