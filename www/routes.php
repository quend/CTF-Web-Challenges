<?php

include("../verify.php");
$x = $_POST["user"];
$x = verifyUser($x);
echo $x;

?>
