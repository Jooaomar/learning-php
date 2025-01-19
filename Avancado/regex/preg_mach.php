<?php

// Declare a regular expression
$regex = '/^[a-zA-Z ]*$/';
// Declare a string
$nameString = 'Joao Marcelo';

// Use preg_much() para pesquisar padrão de busca na string
if (preg_match($regex, $nameString)) {
    echo("String de nome coresspondente"
        . " a expressão regular");
} 
else {
    echo("Somente letras ou espaços em brancos são permitidos na expressão");
}

?>