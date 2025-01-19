<!-- Exemplo: Use preg_quote() para usar com segurança caracteres especiais 
 em uma expressão regular: -->

<?php


// A função preg_quote() adiciona uma barra invertida a caracteres que 
// têm um significado especial em expressões regulares para que pesquisas 
// por caracteres literais possam ser feitas. Esta função é útil ao usar 
// entrada de usuário em expressões regulares.

/**
 * @param input Obrigatório. A string a ser escapada
 * @param delimiter	Opcional. O padrão é nulo. Este parâmetro espera um único 
 * caractere indicando qual delimitador a expressão regular usará. Quando 
 * fornecido, as instâncias deste caractere na string de entrada também serão 
 * escapadas com uma barra invertida
 */
 $search = preg_quote("://", "/");
 
 $input = 'https://www.w3schools.com/';
 $pattern = "/$search/";
 if(preg_match($pattern, $input)) {
  echo "The input is a URL.";
} else {
  echo "The input is not a URL.";
}
?>