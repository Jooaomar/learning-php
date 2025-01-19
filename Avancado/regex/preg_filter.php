<?php
$input = [
  "It is 5 o'clock",
  "40 days",
  "No numbers here",
  "In the year 2000"
];

//      A função preg_filter() retorna uma string ou matriz de strings 
// nas quais as correspondências do padrão foram substituídas pela
// string de substituição.
//      Se a entrada for um array, esta função retornará um array. Se a
// entrada for uma string, então esta função retornará uma string.
//      Esta função é semelhante a preg_replace() com uma diferença: quando 
// uma correspondência para o padrão não é encontrada em uma string de entrada,
// a string não será usada no valor de retorno. Neste cenário, se a entrada for 
// uma string em vez de um array, então a função retornará null.

/**
 * @param regex Obrigatório. Contém uma expressão regular que indica o que procurar
 * @param substituição Obrigatório. Uma string que substituirá os padrões correspondentes. 
 * Pode conter referências posteriores.
 * As strings de substituição podem conter referências posteriores no formato \n ou $n onde 
 * n é o índice de um grupo no padrão.
 * @param entrada Obrigatório. Uma string ou matriz de strings nas quais as substituições 
 * estão sendo executadas
 * @param limite (Opcional). O padrão é -1, o que significa ilimitado. Define um limite 
 * para quantas substituições podem ser feitas em cada string
 * @param count (Opcional). Após a execução da função, esta variável conterá um número 
 * indicando quantas substituições foram realizadas
 */
$result = preg_filter('/[0-9]+/', '($0)', $input);
print_r($result);
?>