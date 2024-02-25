<?php

function set_character()
{
    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
    $letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $symbols = ['!', '?', '£', '%', '/', '=', '§', '{', '}', '[', ']', '$', '*']; 
    // spargo i caratteri in un array
    $characters = [...$numbers, ...$letters, ...$symbols];
    return $characters;
}

function generate_password ($length)
{

    // creo una variabile password vuota
    $password = '';
    // stabilisco i caratteri 
    $characters = set_character();
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
    // apro la sessione
    session_start();
    // assegno la variabile password alla superglobal SESSION
    $_SESSION['password'] = $password;
    
    return;
}