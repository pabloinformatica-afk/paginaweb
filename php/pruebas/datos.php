<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


//$personas=[];
//$persona[]=['nombre'=>'juan', 'apellidos'=>'ruiz', 'dni'=>'5479855e'];
//$persona[]=['nombre'=>'pepe', 'apellidos'=>'pele', 'dni'=>'87964q'];
//$persona[]=['nombre'=>'manuel', 'apellidos'=>'lico', 'dni'=>'9675475c'];
//$persona[]=['nombre'=>'maria', 'apellidos'=>'pea', 'dni'=>'98732489y'];

$personas=[
    ['nombre'=>'juan', 'apellidos'=>'ruiz', 'cumple'=>'24/12/1572', 'email'=>'juan@ruiz.e', 'dni'=>'5479855e', 'tel'=>'54654648'],
    ['nombre'=>'pepe', 'apellidos'=>'pele', 'cumple'=>'14/02/5465', 'email'=>'pepe@pele.q', 'dni'=>'87964q', 'tel'=>'654645684'],
    ['nombre'=>'manuel', 'apellidos'=>'lico', 'cumple'=>'68/65/1349', 'email'=>'manuel@lico.c', 'dni'=>'9675475c', 'tel'=>'465789'],
    ['nombre'=>'maria', 'apellidos'=>'pea', 'cumple'=>'21/98/6429', 'email'=>'maria@pea.y', 'dni'=>'98732489y', 'tel'=>'137444'],
    ['nombre'=>'luis', 'apellidos'=>'peres', 'cumple'=>'12/87/6138', 'email'=>'luis@peres.u', 'dni'=>'4761554u', 'tel'=>'103835568'],
    ['nombre'=>'diego', 'apellidos'=>'gei', 'cumple'=>'10/10/2458', 'email'=>'diego@gei.m', 'dni'=>'54665987m', 'tel'=>'413684335'],
    ['nombre'=>'carlos', 'apellidos'=>'juan', 'cumple'=>'11/24/6675', 'email'=>'carlos@juan.i', 'dni'=>'5646518351i', 'tel'=>'468648654'],
];

//print_r($personas)
?>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>DNI</th>
        <th>Email</th>
        <th>Cumpleaños</th>
        <th>Telefono</th>
    </tr>
    <?php foreach($personas as $persona):?>
        <tr>
            <td><?php echo $persona['nombre'] ?></td>
            <td><?php echo $persona['apellidos'] ?></td>
            <td><?php echo $persona['dni'] ?></td>
            <td><?php echo $persona['email'] ?></td>
            <td><?php echo $persona['cumple'] ?></td>
            <td><?php echo $persona['tel'] ?></td>
        </tr>
        <?php endforeach; ?>
</table>