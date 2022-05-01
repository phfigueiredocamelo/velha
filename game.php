<?php

function printGame($map, $winner = "Niguém") {
    system("clear");
    echo $map[0][0] . "|" . $map[0][1] . "|" . $map[0][2] . "\n";
    echo $map[1][0] . "|" . $map[1][1] . "|" . $map[1][2] . "\n";
    echo $map[2][0] . "|" . $map[2][1] . "|" . $map[2][2] . "\n";
    echo "\n";
    echo "Vencedor: $winner. \n";
}

$map = [
    ["_", "_", "_"],
    ["_", "_", "_"],
    [" ", " ", " "]
];

while (true) {
    printGame($map);

    $choice = readline("Escolha uma jogada: ");
    $choices = explode(" ", $choice);
 
    if ($map[$choices[1]][$choices[2]] == 'x' || $map[$choices[1]][$choices[2]] == 'o') {
        echo "Escolha outro campo \n";
        sleep(2);
        continue;
    }

    $map[$choices[1]][$choices[2]] = $choices[0];

    //check horizontal X
    if ($map[0][0] == 'x' && $map[0][1] == 'x' && $map[0][2] == 'x') {
        printGame($map, 'X');
        break;
    }

    if ($map[1][0] == 'x' && $map[1][1] == 'x' && $map[1][2] == 'x') {
        printGame($map, 'X');
        break;
    }

    if ($map[2][0] == 'x' && $map[2][1] == 'x' && $map[2][2] == 'x') {
        printGame($map, 'X');
        break;
    }

    //check vertical X
    if ($map[0][0] == 'x' && $map[1][0] == 'x' && $map[2][0] == 'x') {
        printGame($map, 'X');
        break;
    }

    if ($map[0][1] == 'x' && $map[1][1] == 'x' && $map[2][1] == 'x') {
        printGame($map, 'X');
        break;
    }

    if ($map[0][2] == 'x' && $map[1][2] == 'x' && $map[2][2] == 'x') {
        printGame($map, 'X');
        break;
    }

    //check diagonal X
    if ($map[0][0] == 'x' && $map[1][1] == 'x' && $map[2][2] == 'x') {
        printGame($map, 'X');
        break;
    }

    if ($map[0][2] == 'x' && $map[1][1] == 'x' && $map[2][0] == 'x') {
        printGame($map, 'X');
        break;
    }

    // Letra O

    //check horizontal o
    if ($map[0][0] == 'o' && $map[0][1] == 'o' && $map[0][2] == 'o') {
        printGame($map, 'o');
        break;
    }

    if ($map[1][0] == 'o' && $map[1][1] == 'o' && $map[1][2] == 'o') {
        printGame($map, 'o');
        break;
    }

    if ($map[2][0] == 'o' && $map[2][1] == 'o' && $map[2][2] == 'o') {
        printGame($map, 'o');
        break;
    }

    //check vertical o
    if ($map[0][0] == 'o' && $map[1][0] == 'o' && $map[2][0] == 'o') {
        printGame($map, 'o');
        break;
    }

    if ($map[0][1] == 'o' && $map[1][1] == 'o' && $map[2][1] == 'o') {
        printGame($map, 'o');
        break;
    }

    if ($map[0][2] == 'o' && $map[1][2] == 'o' && $map[2][2] == 'o') {
        printGame($map, 'o');
        break;
    }

    //check diagonal o
    if ($map[0][0] == 'o' && $map[1][1] == 'o' && $map[2][2] == 'o') {
        printGame($map, 'o');
        break;
    }

    if ($map[0][2] == 'o' && $map[1][1] == 'o' && $map[2][0] == 'o') {
        printGame($map, 'o');
        break;
    }
}
    
sleep(2);