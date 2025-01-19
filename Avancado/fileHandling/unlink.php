<?php

/**
 * Deletar arquivo
 */

if (file_exists("gfg.txt")) {
    unlink("gfg.txt");
    echo "File deleted successfuly!!";
} else {
    echo "File does not exist.";
}