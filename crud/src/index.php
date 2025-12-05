<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require 'autoload.php';
$animal = new Animal('gato');
    $animal->hacerSonido();
$gato = new Gato('mew');
    $gato->hacerSonido();

$perro = new Perro('ruff');
    $gato->hacerSonido();


//Output 

echo $gato->presentacion() . " : " . $gato->hacerSonido();
echo $perro->presentacion() . " : " . $perro->hacerSonido();
    ?>
</body>
</html>