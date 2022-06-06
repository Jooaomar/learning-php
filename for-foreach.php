<?php

for ($contador=0; $contador <=10; $contador++) { 
    # code...
    echo "O contador é $contador <br>";
}

echo "<hr>";

$cores = array("Verde", "Vermelho", "Amarelo");

foreach ($cores as $key => $value) {
    # code...
    echo $value."<br>";
}