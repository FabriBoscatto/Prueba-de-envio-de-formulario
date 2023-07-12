<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php
    //obtenemos la variable de tipo arreglo
    $listaNumeros = $_REQUEST['numero'];

    //imprimimos la cantidad de elementos recibidos
    echo "El arreglo tiene: " .count($listaNumeros). 'elementos';

        //El primer elemento
        echo "El primer elemento es: ".$listaNumeros[0];

    ?>
</body>
</html>