<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon1Acertado</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <?php
    session_start();
    if ($_SESSION['pantalla1']!='check')
        header('Location: ../index.php');
    ?>
    <h1>Pokemon 1 acertado</h1>
    <form action="../proc/res.proc.php" method="get">
        <input type="text" name="Pokemon2" placeholder="Inserte Pokemon...">
        <input type="submit">
    </form> 
    <?php
    if (isset($_GET['msg2'])) {
        echo '<p class="pokemon">Intenta con el pokemon #'.$_GET['msg2'].'</p>';
    }
    ?>
</body>
</html>