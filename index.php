<?php 

// $password_length = $_GET['password-length'] ?? '';

function generatePassword ($password_length)
{

    // creo una variabile password vuota
    $password = '';
    // stabilisco i caratteri 
    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
    $letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $symbols = ['!', '?', '£', '%', '/', '=', '§', '{', '}', '[', ']', '$', '*']; 
    $characters = [...$numbers, ...$letters, ...$symbols];
    while (mb_strlen($new_password)< $password_length && str_contains($new_password, $character));
    $new_password = '';
    $text = explode('', $new_password);
    list($character) = $characters;
    $text[]= $character;
    return $new_password;
}
if (isset($_GET['password-length'])) {
    generatePassword('password-length');
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
                    <input type="number" id="password" name="password-length" min="5" step="1">
                </div>
                <input class="btn" type="submit" value="Invia" >
            </form>
        </div>
    </div>
</body>
</html>