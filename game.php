<?php

function printGame($map, $winner = "Niguém") {
    system("clear");
    echo "Vencedor: $winner. \n";
    echo $map[0][0] . "|" . $map[0][1] . "|" . $map[0][2] . "\n";
    echo $map[1][0] . "|" . $map[1][1] . "|" . $map[1][2] . "\n";
    echo $map[2][0] . "|" . $map[2][1] . "|" . $map[2][2] . "\n";
    echo "\n";
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

    $vencedor = null;

    for ($i=0; $i < 3; $i++) { 
        $X = 0;
        $O = 0;
        for ($j=0; $j < 3; $j++) { 
            if ($map[$i][$j] == 'x') $X++;
            if ($map[$i][$j] == 'o') $O++;
        }
        if ($X == 3) $vencedor = "X";
        else if ($O == 3) $vencedor = "O";
    }

    
    for ($i=0; $i < 3; $i++) {
        $X = 0;
        $O = 0;
        for ($j=0; $j < 3; $j++) { 
            if ($map[$j][$i] == 'x') $X++;
            if ($map[$j][$i] == 'o') $O++;
        }
        if ($X == 3) $vencedor = "X";
        else if ($O == 3) $vencedor = "O";
    }

    $X = 0;
    $O = 0;
    $j = 0;
    $i = 0;
    while ($i <= 2) {
        if ($map[$i][$j] == 'x') $X++;
        if ($map[$i][$j] == 'o') $O++;
        if ($X == 3) $vencedor = "X";
        else if ($O == 3) $vencedor = "O";
        $i++;
        $j++;
    }


    $X = 0;
    $O = 0;
    $j = 2;
    $i = 0;
    while ($i <= 2) {
        if ($map[$i][$j] == 'x') $X++;
        if ($map[$i][$j] == 'o') $O++;
        if ($X == 3) $vencedor = "X";
        else if ($O == 3) $vencedor = "O";
        $i++;
        $j--;
    }

    if ($vencedor) {
        printGame($map, $vencedor);
        sleep(5);
        $map = [
            ["_", "_", "_"],
            ["_", "_", "_"],
            [" ", " ", " "]
        ];
    }
}