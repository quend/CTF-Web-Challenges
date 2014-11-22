<?php 
	include('../img_uploads.php');
	$f = $_FILES['photo']['name'][0];
	if((stripos($_FILES['photo']['name'][0],'.jpg') !== false) || (stripos($_FILES["photo"]['name'][0], ".gif") !==false)){
		move_uploaded_file($_FILES["photo"]["tmp_name"][0], "/var/www/img_uploads/".$_FILES["photo"]["name"][0]);	
		chmod("/var/www/img_uploads/".$_FILES['photo']['name'][0] ,0777);
		$r = sanitizeFile("/var/www/img_uploads/".$_FILES['photo']['name'][0], $_POST['html']); 
		echo $r;
	}else{

	echo 'no';
}
?>
