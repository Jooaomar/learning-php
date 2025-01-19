<!-- Obter itens de uma matriz que começam com "p": -->
<?php
$input = [
  "Red",
  "Pink",
  "Green",
  "Blue",
  "Purple"
];

// A função preg_grep() retorna uma matriz contendo apenas elementos da entrada que 
// correspondem ao padrão fornecido.

/**
 * preg_grep(pattern, input, flags)
 * 
 * @param pattern Obrigatório. Contém uma expressão regular que indica o que procurar
 * @param input Obrigatório. Uma matriz de strings
 * @param flags[PREG_GREP_INVERT] Opcional. Há apenas um sinalizador para esta função. Passar a constante 
 * PREG_GREP_INVERT fará com que a função retorne apenas itens que não correspondem 
 * ao padrão.
 */
$result = preg_grep("/^p/i", $input);
print_r($result);
?>