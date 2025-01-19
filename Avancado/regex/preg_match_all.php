<?php

// Declarar expressão regular
$regex = "/<b>(.*)<\/b>/U";

// Declare a string
$inputString = "Name: <b>John</b> Position: <b>Developer</b>";


// A função preg_match_all() retorna o número de correspondências 
// de um padrão que foram encontradas em uma string e preenche 
// uma variável com as correspondências encontradas.

if (preg_match_all($regex, $inputString, $output)) {
    print_r($output);
} else {
    echo "Expressão não encontrada";
}