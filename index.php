<?php 

$password_length = $_GET['password-length'];

function generatePassword(length) {
    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
    $letters = [a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, z];

    $letters_numbers = [...$numbers, ...$letters];

    
    
}

generatePassword('password-length');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="number" name="password-length" min="1">
        <input type="submit" value="Invia" >
    </form>
</body>
</html>