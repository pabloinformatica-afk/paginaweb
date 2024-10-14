<?php
// Directorio a listar
$directory = '.';

// Escanea el directorio y obtiene un array con los nombres de archivos y carpetas
$files = scandir($directory);

// Función para obtener el tipo de archivo
function fileTypeIcon($file) {
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    switch ($ext) {
        case 'jpg': case 'png': case 'gif': case 'jpeg':
            return '🖼️ Imagen';
        case 'pdf':
            return '📄 PDF';
        case 'txt':
            return '📝 Texto';
        case 'php':
            return '⚙️ PHP';
        default:
            return is_dir($file) ? '📁 Carpeta' : '📄 Archivo';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Archivos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .icon {
            margin-right: 8px;
        }
        a {
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Contenido del Directorio</h1>
    <table>
        <thead>
            <tr>
                <th>Ícono</th>
                <th>Nombre</th>
                <th>Tamaño (KB)</th>
                <th>Última Modificación</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Iterar sobre cada archivo/carpeta en el directorio
            foreach ($files as $file):
                if ($file !== '.' && $file !== '..'): // Excluir "." y ".."
                    $filePath = $directory . '/' . $file;
                    ?>
                    <tr>
                        <td><?= fileTypeIcon($file); ?></td>
                        <td><a href="<?= $filePath ?>" target="_blank"><?= $file; ?></a></td>
                        <td><?= is_file($filePath) ? round(filesize($filePath) / 1024, 2) : '--'; ?></td>
                        <td><?= date("d-m-Y H:i", filemtime($filePath)); ?></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
