<?php

// A função preg_split() divide uma string em uma matriz 
// usando correspondências de uma expressão regular como separadores.
// preg_split(pattern, string, limit, flags)

/**
 * @param pattern Obrigatório. Uma expressão regular que determina o que usar como separador
 * @param inputString Obrigatório. A string que está sendo dividida
 * @param limit (opcional) Limita o número de elementos que o array retornado pode ter. Se o limite 
 * for atingido antes que todos os separadores tenham sido encontrados, o restante da 
 * string será colocado no último elemento do array
 * @param PREG_SPLIT_NO_EMPTY (opcional) Strings vazias serão removidas do array retornado.
 * @param PREG_SPLIT_DELIM_CAPTURE (opcional) Se a expressão regular contiver um grupo entre 
 * parênteses, as correspondências desse grupo serão incluídas na matriz retornada.
 * @param PREG_SPLIT_OFFSET_CAPTURE (opcional) Cada elemento no array retornado será um array 
 * com dois elementos, onde o primeiro elemento é a substring e o segundo elemento é a posição 
 * do primeiro caractere da substring na string de entrada.
 */

$date = "1970-01-01 00:00:00";
$pattern = "/[-\s:]/";
$components = preg_split($pattern, $date);
print_r($components);
echo "<br>";

$date = "1970-01-01 00:00:00";
$pattern = "/([-\s:])/";
$components = preg_split($pattern, $date, -1,
PREG_SPLIT_DELIM_CAPTURE);
print_r($components);
echo "<br>";


$date = "1970-01-01";
$pattern = "/-/";
$components = preg_split($pattern, $date, -1,
PREG_SPLIT_OFFSET_CAPTURE);
print_r($components);