<!-- Use preg_last_error() para manipular erros: -->

<?php
$str = 'The regular expression is invalid.';
$pattern = '/invalid//';

// A função preg_last_error() retorna um código de erro para a 
// expressão regular avaliada mais recentemente. O valor retornado 
// corresponderá a uma das seguintes constantes:
// [PREG_NO_ERROR] Nenhum erro ocorreu
// [PREG_INTERNAL_ERROR] Ocorreu um erro ao avaliar a expressão
// [PREG_BACKTRACK_LIMIT_ERROR] O número de backtracks necessários 
// para avaliar a expressão excedeu o limite fornecido na configuração do PHP
// [PREG_RECURSION_LIMIT_ERROR] A profundidade de recursão necessária para 
// avaliar a expressão excedeu o limite fornecido na configuração do PHP
// [PREG_BAD_UTF8_ERROR] A sequência de entrada continha dados UTF-8 inválidos
// [PREG_BAD_UTF8_OFFSET_ERROR] Durante a avaliação, um deslocamento de string 
// não apontou para o primeiro caractere de um símbolo UTF-8 multibyte
// [PREG_JIT_STACKLIMIT_ERROR] O compilador JIT ficou sem memória de pilha ao 
// tentar avaliar a expressão

$match = @preg_match($pattern, $str, $matches);

if($match === false) {
  // An error occurred
  $err = preg_last_error();
  if($err == PREG_INTERNAL_ERROR) {
    echo 'Invalid regular expression.';
  }
} else if($match) {
  // A match was found
  echo $matches[0];
} else {
  // No matches were found
  echo 'No matches found';
}
?>