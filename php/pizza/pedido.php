<?php
$tipo=['1 Estacion','2 Estacion','3 Estacion','4 Estacion'];
$precio=['10','15','9','34'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Pedido</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>Pizzeria La Mía Mamma</h1>
    <h2>Ver pedido</h2>
    <table>
        <tr>
            <th>Campo</th>
            <th>Valor</th>
        </tr>
        <tr>
            <td>Nombre Completo</td>
            <td>
                <?php echo $_POST['nombrecompleto']; ?>
            </td>
        </tr>
        <tr>
            <td>Dirección</td>
            <td>
                <?php echo $_POST['direccion']; ?>
            </td>
        </tr>
        <tr>
            <td>Teléfono</td>
            <td>
                <?php echo $_POST['telefono']; ?>
            </td>
        </tr>
        <tr>
            <td>Tipo de Pizza</td>
            <td>
                <?php echo $tipo[$_POST['tipo']]; ?>
            </td>
        </tr>
        <tr>
            <td>Tamaño de Pizza</td>
            <td>
                <?php echo $_POST['tamano']; ?>
            </td>
        </tr>
        <tr>
            <td>Extra Queso</td>
            <td>
                <?php echo $_POST['extraqueso']; ?>
            </td>
        </tr>
        <tr>
            <td>Masa Fina</td>
            <td>
                <?php echo $_POST['fina']; ?>
            </td>
        </tr>
        <tr>
            <td>Precio</td>
            <td>
                <?php echo $precio[$_POST['tipo']]; ?>€
            </td>
        </tr>
        <tr>
            <td>Imagen</td>
            <td>
            <img src="pizza<?php echo $_POST['tipo']; ?>.png" alt="pizza<?php echo $_POST['tipo']; ?>" width="100" height="100">
            </td>
    </tr>
    </table>
</body>

</html>