<?php

// Abrir arquivo no modo leitura
$file = fopen("gfg.txt", "r");

if ($file) {
    echo "File opened successfully!";
    fclose($file); // feccha o arquivo
} else {
    echo "Failed to open the file";
}

/**
 * W - Abre um arquivo somente para escrita.Se o arquivo não existir, 
 * então um novo arquivo será criado e se o arquivo já existir, então 
 * o arquivo será truncado (o conteúdo do arquivo será apagado).
 * 
 * r - O arquivo está aberto somente para leitura.
 * 
 * a - O arquivo está aberto somente para escrita. O ponteiro do arquivo 
 * aponta para o fim do arquivo. Os dados existentes no arquivo são 
 * preservados.
 * 
 * W+ - Abre o arquivo para leitura e escrita. Se o arquivo não existir, 
 * então um novo arquivo é criado e se o arquivo já existir, então o 
 * conteúdo do arquivo é apagado
 * 
 * r+ - O arquivo está aberto para leitura e escrita.
 * 
 * a+ - O arquivo está aberto para escrita/leitura. O ponteiro do arquivo 
 * aponta para o fim do arquivo. Dados existentes no arquivo são preservados. 
 * Se o arquivo não estiver lá, um novo arquivo será criado.
 * 
 * X - O novo arquivo é criado somente para gravação.
 */