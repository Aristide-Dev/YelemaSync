<?php

// Fonction pour imprimer du texte en couleur
function colorize($text, $color="black") {
    $colors = [
        'black' => '0;30',
        'dark_gray' => '1;30',
        'blue' => '0;34',
        'light_blue' => '1;34',
        'green' => '0;32',
        'light_green' => '1;32',
        'cyan' => '0;36',
        'light_cyan' => '1;36',
        'red' => '0;31',
        'light_red' => '1;31',
        'purple' => '0;35',
        'light_purple' => '1;35',
        'brown' => '0;33',
        'yellow' => '1;33',
        'light_gray' => '0;37',
        'white' => '1;37',
    ];

    // Vérifie si la couleur est définie
    if (array_key_exists($color, $colors)) {
        return "\033[" . $colors[$color] . "m" . $text . "\033[0m";
    } else {
        return $text; // Retourne le texte sans couleur si la couleur n'est pas trouvée
    }
}
