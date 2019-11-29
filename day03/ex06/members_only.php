<?php  
	$login = "zaz";
	$pass = "jaimelespetitsponeys";
	if ($_SERVER['PHP_AUTH_USER'] == $login && $_SERVER['PHP_AUTH_PW'] == $pass)
   {
       $img = file_get_contents("./img/42.png");
       $encode = base64_encode($img);
?>
<html><body><?php echo "\nHello Zaz";
 ?><br />
<img src=<?php echo "'data:imag/png;base64,$encode'";?>>
</body></html>
<?php
   }
   else
   {
       header("WWW-Authenticate: Basic realm=''Member area''");
       header('HTTP/1.0 401 Unauthorized');
       ?>
<html><body>That area is accessible for members only</body></html>
<?php
}
?>