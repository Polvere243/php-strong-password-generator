<?php 
require_once __DIR__ . '/includes/function.php';

$length = $_GET['length'] ?? '';

if (!empty($length)) {
    generate_password($length);

    header('Location: destination.php');
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
                        <input id="no" type="radio" name="repetition" checked>
                        <label for="yes">SÌ</label>
                        <input id="yes" type="radio" name="repetition">
                    </span>
                </div>
                    

                <input class="btn" type="submit" value="Invia" >
            </form>
        </div>
    </div>
</body>
</html>