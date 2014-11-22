<?php 
include('../aes.php');

$Klartext = $_POST['aes_data'];	
	if(strlen($Klartext)!=16){
		$Klartext = 'aaaaaaaaaaaaaaaa';
	}
if(strcmp($Klartext,'SuperAdmin123456')!=0){
	$crypted = fnEncrypt($Klartext);
}else{
	$crypted = "not privileged";
}
echo $crypted;

?>
