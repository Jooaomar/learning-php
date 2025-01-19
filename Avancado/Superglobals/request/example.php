<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
NAME: <input type="text" name="fname">
<button type="submit">SUBMIT</button>
</form>
<?php
/**
 * Os dados são recuperados usando a variável de matriz superglobal $_REQUEST
 * $_REQUEST, by default, contains the contents of $_GET, $_POST and $_COOKIE.
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = htmlspecialchars($_REQUEST['fname']); // usar htmlspecialchars para evitar ataque XSS
	if(empty($name)){
		echo "Name is empty";
	} else {
		echo $name;
	}
}
?>
</body>
</html>
