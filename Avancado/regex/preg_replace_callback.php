<?php
function countLetters($matches) {
  return $matches[0] . '(' . strlen($matches[0]) . ')';
}

// A função preg_replace_callback(), dada uma expressão e um retorno de chamada, 
// retorna uma string onde todas as correspondências da expressão são 
// substituídas pela substring retornada pela função de retorno de chamada.

$input = "Welcome to W3Schools.com!";
$pattern = '/[a-z0-9\.]+/i';

/**
 * @param regex Uma expressão regular ou matriz de expressões regulares indicando o 
 * que procurar
 * @param substituições Uma função de retorno de chamada que retorna a substituição.
 * A função de retorno de chamada tem um parâmetro contendo uma matriz de 
 * correspondências. O primeiro elemento na matriz contém a correspondência para 
 * toda a expressão, enquanto os elementos restantes têm correspondências para cada 
 * um dos grupos na expressão.
 * @param entrada A string ou matriz de strings nas quais as substituições estão 
 * sendo executadas.
 * @param limite (Opcional) O padrão é -1, o que significa ilimitado. Define um limite 
 * para quantas substituições podem ser feitas em cada string
 * @param count (Opcional). Após a execução da função, esta variável conterá um número 
 * indicando quantas substituições foram realizadas
 */
$result = preg_replace_callback($pattern, 'countLetters', $input);
echo $result;
?>