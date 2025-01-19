<?php

$file = fopen("gfg.txt", "r");
$content = fread($file, filesize("gfg.txt"));

echo $content;

fclose($file);

?>