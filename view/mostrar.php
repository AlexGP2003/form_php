<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recogida de Datos</title>
</head>
<body>
    <h1>Mostrar datos del formulario</h1>
    <?php
       echo '<p>'.$_POST['Nombre'].'</p>';
       echo $_POST['pwd'];
    ?> 
</body>
</html>