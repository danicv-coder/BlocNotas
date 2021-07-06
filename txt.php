<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje</title>
</head>

<body>
    <?php
    $direc = "assets";
    if (!is_dir($direc)) {
        mkdir($direc);
        $ar = fopen("assets/archivo.txt", "w") or die("Problemas en la creacíon del archivo");
        $asu = $_REQUEST['asunto'];
        $desc = $_REQUEST['descripcion'];
        fwrite($ar, $asu);
        fwrite($ar, "\n");
        fwrite($ar, "\n");
        fwrite($ar, $desc);
        fwrite($ar, "\n");
        echo "Se creo correctamente el archivo de texto";
    } else {
        echo "El directorio $direc ya existe! No se puede crear de nuevo";
    }
    ?>
</body>

</html>