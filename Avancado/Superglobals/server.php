<?php
/**
 * It is a PHP super global variable that stores the information about headers, 
 * paths and script locations. Some of these elements are used to get the information
 * from the superglobal variable $_SERVER. Below program illustrates the use of 
 * $_SERVER in PHP:
 *  
 */

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br>";
echo $_SERVER['REMOTE_HOST'];
echo "<br>";
echo $_SERVER['REQUEST_METHOD'];
