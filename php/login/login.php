<?php
// Datos de usuario predefinidos
$usuario_correcto = 'usuario';
$contrasena_correcta = 'usuario';

// Capturando datos del formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Verificando si las credenciales coinciden
if ($usuario === $usuario_correcto && $contrasena === $contrasena_correcta) {
    // Credenciales correctas
    echo '<h1>Bienvenido, ' . ($usuario) . '!</h1>';
    echo '<p>Acceso concedido.</p>';
    // Aquí podrías agregar más contenido o redirigir a otra página si es necesario
} else {
    // Credenciales incorrectas
    echo '<h1>Acceso denegado</h1>';
    echo '<p>El usuario o la contraseña son incorrectos.</p>';
}
?>
