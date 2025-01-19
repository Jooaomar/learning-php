<?php

// preg_last_error_msg — Retorna a mensagem de erro da última execução do regex PCRE


preg_match('/(?:\D+|<\d+>)*[!?]/', 'foobar foobar foobar');

if (preg_last_error() !== PREG_NO_ERROR) {
    echo preg_last_error_msg();
}