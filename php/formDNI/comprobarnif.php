<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$dni = $_POST['dni'];
$dnil = $_POST['dnil'];

function letraDNI($dni)
	{
		$letras='TRWAGMYFPDXBNJZSQVHLCKE';
		
		return substr($letras, $dni%23, 1);
	}
?>
<h2>Tu DNI es:</h2>
<h1><?php echo   $dni.letraDNI($dni); ?></h1>
<h1><?php echo   $dnil; ?></h1>