<?php
 
// Declare a regular expression
$regex = "([0-9]+)";
 
// Declare a string
$original = "Completed graduation in 2004";
$replaceWith = "2002";


// A função preg_replace() retorna uma string ou 
// matriz de strings onde todas as correspondências de 
// um padrão ou lista de padrões encontrados na 
// entrada são substituídas por substrings.
// 
// Há três maneiras diferentes de usar esta função:
// 
// 1. Um padrão e uma string de substituição. As 
// correspondências do padrão são substituídas pela string de substituição.
// 
// 2. Uma matriz de padrões e uma string de substituição. Correspondências de 
// qualquer um dos padrões são substituídas pela string de substituição.
// 
// 3. Uma matriz de padrões e uma matriz de strings de substituição. 
// As correspondências de cada padrão são substituídas pela string de 
// substituição na mesma posição na matriz de substituições. Se nenhum item 
// for encontrado naquela posição, a correspondência é substituída por uma string vazia.
//
// preg_replace(padrões, substituições, entrada, limite, contagem)
$original = preg_replace($regex, $replaceWith, $original); 
     
// Display result
echo $original;
  
?>