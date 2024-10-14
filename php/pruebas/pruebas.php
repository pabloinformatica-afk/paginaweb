<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pruebas PHP</title>
    <!-- <meta http-equiv="refresh" content="1" /> --->
  </head>
  <body>
		<p>Zona horaria -- Europe/Madrid</p>
    <h1>
      <?php 
		//Establecer la zona horaria
//		date_default_timezone_set('Europe/Madrid');
		date_default_timezone_set('Europe/Madrid');
		//Mostrar hora y fecha
		echo date('H:i:s - d/m/y - e');
	?>
    </h1>
	<p>Hola <?php echo $_GET['nombre']?></p>
  </body>
</html>
