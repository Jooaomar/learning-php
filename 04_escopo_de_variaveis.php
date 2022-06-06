<?
// ESCOPO GLOBAL
$nome = "João Marcelo Cunha";
$a = 1;
$b = 3;
$c = 7;


function exibeNome() {	
	// ESCOPO LOCAL
	
	global $nome;
	echo $nome;

	/*
	Obseve que teremos uma erro aqui pois estamos acessando uma variável de escopo
	GLOBAL em ESCOPO LOCAL. Precisamos especificar que a variável é GLOBAL
	*/
}
exibeNome();
echo "<hr>";


function exibeCidade() {
	// ESCOPO LOCAL
	global $cidade;
	$cidade = "Teresina";
}
exibeCidade();
echo $cidade;
echo "<hr>";


function soma(){
	// ESCOPO LOCAL
	echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c']; 
}

soma();







