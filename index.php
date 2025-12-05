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
        <label for = "buscar"></label>
<input type="text" placeholder = "¿Qué desea buscar?">
    </form>
    <button>Añadir</button>
    <?php
        require 'autoload.php';
        //definicion obj 
        $_POST = ['$gestorEntidad'];
        $gestorEntidad = new Centro();
        $persona = new Alumnos('$A1111', 'paquito', 18);
        $gestorEntidad->Crear($personas);
    ?>
</body>
</html>