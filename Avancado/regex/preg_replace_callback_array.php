<!-- Exemplo: Mostre quantas letras ou dígitos são encontrados em cada 
 palavra de uma frase: -->
 
<?php
function countLetters($matches) {
  return $matches[0] . '[' . strlen($matches[0]) . 'letter]';
}

function countDigits($matches) {
  return $matches[0] . '[' . strlen($matches[0]) . 'digit]';
}

$input = "There are 365 days in a year.";
$patterns = [
  '/\b[a-z]+\b/i' => 'countLetters',
  '/\b[0-9]+\b/' => 'countDigits'
];

// A função preg_replace_callback_array() retorna uma string ou um 
// array de strings em que as correspondências de um conjunto de 
// expressões regulares são substituídas pelo valor de retorno de 
// uma função de retorno de chamada.

// Nota: Para cada string, a função avalia os padrões na ordem em 
// que são fornecidos. O resultado da avaliação do primeiro padrão 
// na string é usado como string de entrada para o segundo padrão e 
// assim por diante. Isso pode levar a um comportamento inesperado.


/**
 * preg_replace_callback_array(patterns, input, limit, count)
 * 
 * @param pattern Um array associativo que associa padrões de expressão 
 * regular a funções de retorno de chamada.
 * As funções de retorno de chamada têm um parâmetro que é uma matriz de 
 * correspondências. O primeiro elemento na matriz contém a correspondência 
 * para toda a expressão, enquanto os elementos restantes têm correspondências 
 * para cada um dos grupos na expressão.
 * @param input A string ou matriz de strings nas quais as substituições 
 * estão sendo executadas
 * @param limit Opcional. O padrão é -1, o que significa ilimitado. Define um 
 * limite para quantas substituições podem ser feitas em cada string.
 * @param count Após a execução da função, esta variável conterá um número 
 * indicando quantas substituições foram realizadas
 */
$result = preg_replace_callback_array($patterns, $input);
echo $result;
?>