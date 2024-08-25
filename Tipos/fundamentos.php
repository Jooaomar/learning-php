<?php
// Tipos Básicos em PHP

// Inteiro (int)
$idade = 25;
echo "Idade: $idade\n"; // Saída: Idade: 25

// Ponto Flutuante (float)
$altura = 1.75;
echo "Altura: $altura\n"; // Saída: Altura: 1.75

// String (string)
$nome = "João";
echo "Nome: $nome\n"; // Saída: Nome: João

// Booleano (bool)
$casado = true; // ou false
echo "Casado: " . ($casado ? "Sim" : "Não") . "\n"; // Saída: Casado: Sim

// Verificando os tipos de variáveis
echo "Tipo da variável \$idade: " . gettype($idade) . "\n"; // Saída: integer
echo "Tipo da variável \$altura: " . gettype($altura) . "\n"; // Saída: double
echo "Tipo da variável \$nome: " . gettype($nome) . "\n"; // Saída: string
echo "Tipo da variável \$casado: " . gettype($casado) . "\n"; // Saída: boolean

// Conversão de Tipos
$alturaComoString = (string) $altura;
echo "Altura como string: $alturaComoString\n"; // Saída: Altura como string: 1.75

$idadeComoFloat = (float) $idade;
echo "Idade como float: $idadeComoFloat\n"; // Saída: Idade como float: 25

$nomeComoBool = (bool) $nome;
echo "Nome como bool: " . ($nomeComoBool ? "Verdadeiro" : "Falso") . "\n"; // Saída: Verdadeiro

$casadoComoInt = (int) $casado;
echo "Casado como int: $casadoComoInt\n"; // Saída: Casado como int: 1