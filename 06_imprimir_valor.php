<?php


// Uso: Exibe uma ou mais strings diretamente.
// Características:
// Simples e rápido, ideal para saída de texto sem formatação.
// Pode aceitar múltiplos argumentos separados por vírgulas (sem necessidade de concatenação).
// Não retorna nenhum valor.
echo "Hello, World!"; // Saída: Hello, World!
echo "Olá", " Mundo!"; // Saída: Olá Mundo!


// Uso: Exibe uma string formatada de acordo com especificadores de formato (semelhante ao printf de C).
// Características:
// Permite formatar valores numéricos, strings e outras informações antes de exibi-las.
// Retorna o número de caracteres exibidos.
// Suporta placeholders como %s, %d, %f, etc.
$name = "John";
$age = 25;
printf("Name: %s, Age: %d", $name, $age);
// Saída: Name: John, Age: 25


// Uso: Exibe informações legíveis sobre variáveis, especialmente úteis para arrays e objetos.
// Características:
// Formata a saída para facilitar a leitura.
// Aceita apenas um argumento (a variável a ser exibida).
// Retorna a string formatada se o segundo argumento for true, em vez de exibi-la.
$array = ["name" => "John", "age" => 25];
print_r($array);
// Saída:
// Array
// (
//     [name] => John
//     [age] => 25
// )
