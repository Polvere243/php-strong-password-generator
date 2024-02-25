<?php 
require_once __DIR__ . '/includes/function.php';

if (isset($_GET['length'])) {
    $repetitions_allowed = $_GET['repetition'] || false;

   $error = generate_password($length, $repetition_allowed);
    if (!$error) header('Location: destination.php');
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
    <div class="container">
        <h1>Generatore di Password</h1>
        <?php if ($error) : ?>
        <div class="alert">
            <p><?= $error ?></p>
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        </div>
        <?php endif; ?>
        <div class="form-box">
            <form action="" method="get">
                <div class="input-box">
                    <label for="password">Scegli una lunghezza</label>
                    <input type="number" id="password" name="length" min="5" value="<?= $_GET['length'] ?? 5 ?>" step="1">
                </div>
                <div class="radio">
                    <h4>Vuoi che i caratteri si ripetano?</h4>
                    <span>
                        <label for="no">NO</label>
                        <input id="no" type="radio" name="repetition"  value="0">
                        <label for="yes">SÌ</label>
                        <input id="yes" type="radio" name="repetition" value="1" checked>
                    </span>
                </div>
                <input class="btn" type="submit" value="Invia" >
            </form>
        </div>
    </div>
</body>
</html>