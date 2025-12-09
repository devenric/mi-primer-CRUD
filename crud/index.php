<?php
    session_start();
            require 'autoload.php';
            require_once __DIR__ .  '/src/Centro.php';
            require_once __DIR__ .  '/src/Personas.php';

$claveSesion = 'gestorCentro';

if (!isset($_SESSION[$claveSesion])) {
    // Si no existe, creamos la instancia y la guardamos en la sesión
    $gestorEntidad = new Centro(); 
    $_SESSION[$claveSesion] = $gestorEntidad;
} else {
    // Si ya existe, recuperamos el objeto que contiene todos los datos anteriores
    $gestorEntidad = $_SESSION[$claveSesion];
}
        //definicion obj 
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['edad'])){
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];

            $persona = new Personas($id,$nombre,$edad);
            $gestorEntidad->Crear($persona);
            $_SESSION[$claveSesion] = $gestorEntidad;
            header('Location: index.php');
            exit;
        }
    ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./crud/styles.css">
</head>
<body>
    <h1>Buscador de personas en el centro</h1>
    <form method = "POST">
<input type="text" name="id">
<input type="text" name="nombre">
<input type="text" name="edad">
<button type="submit">Añadir</button>
    </form>
<?php
$personasActuales = $gestorEntidad->getPersonas();
    if (empty($personasActuales)) {
        echo "<li>Aún no hay personas. Usa el formulario para añadir una.</li>";
    } else {
        echo "<h2>Personas registradas:</h2>";
        echo "<ul>";
        foreach ($personasActuales as $p) {
            // Ahora $p es un array asociativo
            echo "<li>ID: " . htmlspecialchars($p['id'] ?? 'N/A') . 
                 " | Nombre: " . htmlspecialchars($p['nombre'] ?? 'N/A') . 
                 " | Edad: " . htmlspecialchars($p['edad'] ?? 'N/A') . "</li>";
        }
        echo "</ul>";
    }
    ?>

</body>
</html>