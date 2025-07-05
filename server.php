<?php
echo "<h2 style='color:green;'>Datos recibidos de la tarea escolar</h2><hr>";

// Mostrar todos los campos POST
foreach ($_POST as $clave => $valor) {
    echo "<p><strong>$clave:</strong> $valor</p>";
}

// Mostrar archivo subido
if (isset($_FILES['Archivo'])) {
    $archivo = $_FILES['Archivo'];
    if ($archivo['error'] === 0) {
        $nombre = basename($archivo['name']);
        $rutaDestino = "uploads/" . $nombre;
        // Crear carpeta si no existe
        if (!is_dir("uploads")) {
            mkdir("uploads");
        }
        if (move_uploaded_file($archivo['tmp_name'], $rutaDestino)) {
            echo "<p><strong>Archivo subido correctamente:</strong> <a href='$rutaDestino' target='_blank'>$nombre</a></p>";
        } else {
            echo "<p style='color:red;'>No se recibió ningún archivo.</p>";
        }
    }
}
?>
