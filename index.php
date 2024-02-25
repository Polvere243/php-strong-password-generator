<?php 
start_session()
require_once __DIR__ . '/includes/function.php';

$length = $_GET['length'] ?? '';

if (!empty($length)) {
    $password = generatePassword($length);
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
    <div class="container">
        <h1>Generatore di Password</h1>
        <div class="form-box">
            <form action="" method="get">
                <div class="input-box">
                    <label for="password">Scegli una lunghezza</label>
                    <input type="number" id="password" name="length" min="5" value="<?= $length ?? 5 ?>" step="1">
                </div>
                <input class="btn" type="submit" value="Invia" >
            </form>
        </div>
    </div>
</body>
</html>