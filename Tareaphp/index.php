<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Recibe los datos del formulario
    $user_name = $_POST["user_name"];
    $edad = $_POST["edad"];
    $user_email = $_POST["user_email"];
    $contraseña = $_POST["contraseña"];
    $numcuent = $_POST["numcuent"];
    $carrera = $_POST["carrera"];
    $semestre = $_POST["semestre"];

    header("Location: Despedida.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Tarea4</title>
    <link rel="shortcut icon" href="formulario.png">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Creación de formulario con PHP</h1>
    <h2>Ingrese los datos que se le piden, por favor</h2>
    <form action="Despedida.php" method="post">
        <ul>
            <li>
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="user_name" />
            </li>
        </ul>

        <ul>
            <li>
                <label for="edad">Edad:</label>
                <input type="text" id="edad" name="edad" pattern="[0-9]{1,2}" required />
            </li>
        </ul>

        <ul>
            <li>
                <label for="email">Email:</label>
                <input type="text" id="email" name="user_email" />
            </li>
        </ul>

        <ul>
            <li>
                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" />
            </li>
        </ul>

        <ul>
            <li>
                <label for="numcuent">N. Cuenta(9dig.):</label>
                <input type="text" id="numcuent" name="numcuent" pattern="[0-9]{9}" required />
            </li>
        </ul>

        <ul>
            <li>
                <label for="carrera">Carrera:</label>
                <input type="text" id="carrera" name="carrera" />
            </li>
        </ul>

        <ul>
            <li>
                <label for="semestre">Semestre:</label>
                <input type="text" id="semestre" name="semestre"  />
            </li>
        </ul>

        <li class="button">
            <button type="submit" id="enviarBoton">Enviar información</button>
        </li>
    </form>
</body>
</html>
