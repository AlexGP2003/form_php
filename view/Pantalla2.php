<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon2</title>
</head>
<body>
<?php
    session_start();
    if ($_SESSION['pantalla2']!='check')
        header('Location: ../index.php');
    ?>
    <h1>Acertaste el pokemon 2</h1>
    <a href="../proc/replay.proc.php">Volver a Jugar</a>
</body>
</html>