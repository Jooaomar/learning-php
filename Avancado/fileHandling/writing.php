<?php

// Open file in write mode
$file = fopen("gfg.txt", "w");

if ($file) {
    $text = "Hello world\n";
    fwrite($file, $text);
    fclose($file);
}