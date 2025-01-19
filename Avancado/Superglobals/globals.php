<?php

$x = 300;
$y = 200;

function mulltiplication() {
    $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
}

mulltiplication();
echo $z;
