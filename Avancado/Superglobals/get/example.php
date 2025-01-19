<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body bgcolor="cyan">
  <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label for="name">Please enter your name: </label>
    <input name="name" type="text"><br>
    <label for="city">Please enter your city: </label>
    <input name="city" type="text"><br>
    <button type="submit">SUBMIT</button>
  </form>
  <?php 
    $name = $_GET['name'];
    $city = $_GET['city'];
    echo "<h1> This is ".$name." of "."$city"."</h1><br>"
  ?>
  <image src="2.jpg" alt="nanilake" height="400" width="500" />
</body>
</html>