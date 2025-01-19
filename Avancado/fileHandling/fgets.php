<?php
  
$file = fopen("gfg.txt", "r");

/**
 * Ler linha por linhas
 */
if ($file) {
    while (($line = fgets($file)) !== false) {
        echo $line . "<br>";
    }
    fclose($file);
}
