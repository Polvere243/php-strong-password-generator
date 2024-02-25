<?php 
$length = $_GET['password-length'] ?? '';

if (!empty($length)) {
    generatePassword('length');
}


function generatePassword ($length)
{

    // creo una variabile password vuota
    $password = '';
    // stabilisco i caratteri 
    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
    $letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $symbols = ['!', '?', '£', '%', '/', '=', '§', '{', '}', '[', ']', '$', '*']; 
    // spargo i caratteri in un array
    $characters = [...$numbers, ...$letters, ...$symbols];
    // calcolo quanti caratteri sono presenti nell'array
    $total_characters = count($characters);
    // genero la password estraendo caratteri casuali fino a riempire la password
    while (mb_strlen($password) < $length) 
    {
        // ricavo un indice casuale
        $random_index = rand(0, $total_characters - 1);
        // uso l'indice casuale per estrarre i caratteri casuali
        $random_character = $characters[$random_index];
        // concateno i caratteri casuali per formare la password
        $password .= $random_character;
    }
    // restituisco la password generata
    return $password;
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
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <p>La tua password è: <strong><?= $password ?></strong></p>
        </div>
    <?php endif?>
    <div class="container">
        <h1>Generatore di Password</h1>
        <div class="form-box">
            <form action="" method="get">
                <div class="input-box">
                    <label for="password">Scegli una lunghezza</label>
                    <input type="number" id="password" name="length" min="5" value=" <?= $length ?? "5" ?> step="1">
                </div>
                <input class="btn" type="submit" value="Invia" >
            </form>
        </div>
    </div>
</body>
</html>