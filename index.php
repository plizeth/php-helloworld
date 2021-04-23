
<?php
session_start();
foreach (getallheaders() as $name => $value) {
	 echo "$name: $value</br>";
}
echo "<h2> This is Server ?</h2></br>";
	echo "<h2>".$_SESSION["user"]."</h2>";
	exit;

?>
