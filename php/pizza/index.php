<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario PHP</title>
  <!-- <meta http-equiv="refresh" content="5" /> -->
</head>

<body>
  <h1>
    Pizzeria La Mía Mamma
  </h1>
  <h2>Realizar pedido</h2>
  <form action="pedido.php" method="post">
    <p>
      Nombre completo: <br>
      <input type="text" name="nombrecompleto" size="40" />
    </p>
    <p>
    </p>
    Direccion: <br>
    <input type="text" name="direccion" size="100" />
    </p>
    <p>
      Telefono: <br>
      <input type="tel" name="telefono" min="1900" />
    </p>
    <p>Elige el tipo de pizza: <br>
      <select name="tipo">
        <option value="0">Pizza 1 estacion</option>
        <option value="1">Pizza 2 estacion</option>
        <option value="2">Pizza 3 estacion</option>
        <option value="3">Pizza 4 estacion</option>
      </select>
    </p>
    <p>
      Elige el tamaño: <br>
      <input type="radio" name="tamano" value="M" /> M <br>
      <input type="radio" name="tamano" value="L" /> L <br>
      <input type="radio" name="tamano" value="XL" /> XL <br>
      <input type="radio" name="tamano" value="XXL" /> XXL
    </p>
    <p>Opciones pedido: <br>
      <input type="checkbox" name="extraqueso" /> Extra de queso <br>
      <input type="checkbox" name="fina" /> Fina
    </p>
    <p>
      <input type="submit" value="Realizar pedido" />
    </p>
  </form>
</body>

</html>