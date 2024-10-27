<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Publicationes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
<?php
    echo "<h1>Listado de publicaciones</h1>";
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>";
    echo "Id";
    echo "</th>";
    echo "<th>";
    echo "Nombre";
    echo "</th>";
    echo "<th>";
    echo "Fecha";
    echo "</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($datos as $dato) {
        echo "<tr>";
        echo "<td>";
        echo $dato["id"] . "<br/>";
        echo "</td>";
        echo "<td>";
        echo $dato["name"] . "<br/>";
        echo "</td>";
        echo "<td>";
        echo $dato["publishedYear"] . "<br/>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    ?>
    <script src="js/main.js"></script>
</body>

</html>






