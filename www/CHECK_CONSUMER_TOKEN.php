<?php 
include('../aes.php');
$x = $_POST['aes_crypted'];
$newClear = fnDecrypt_($x);
echo $newClear;        

?>
