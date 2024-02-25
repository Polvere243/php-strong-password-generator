<?php
session_start();
if(isset( $_SESSION[$password])){
    $password = $_SESSION[$password];
    session_destroy();
} else {
    header('Location: index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php if (isset($password)) :?>
        <div class="alert">
            <p>La tua password è: <strong><?= $password ?></strong></p>
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        </div>
    <?php endif; ?>
    <a class="btn-back" href="index.php">RITORNO</a>
</body>    