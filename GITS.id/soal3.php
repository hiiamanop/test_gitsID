<?php

function isBalancedBracket($str) {
    $stack = array();
    $opening = array('(', '[', '{');
    $closing = array(')', ']', '}');

    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];

        if (in_array($char, $opening)) {
            array_push($stack, $char);
        } elseif (in_array($char, $closing)) {
            // Jika stack kosong atau karakter pembuka yang paling atas di stack tidak sesuai dengan karakter penutup saat ini
            if (empty($stack) || array_pop($stack) != $opening[array_search($char, $closing)]) {
                return "NO";
            }
        }
    }

    // Jika stack tidak kosong, artinya masih ada karakter pembuka yang belum ditutup
    if (!empty($stack)) {
        return "NO";
    }

    return "YES";
}

// Contoh penggunaan fungsi dengan data dari sampel 1, 2, dan 3
$input1 = "{ [ ( ) ] }";
$input2 = "{ [ ( ] ) }";
$input3 = "{ ( ( [ ] ) [ ] ) [ ] }";


echo isBalancedBracket($input1) . PHP_EOL; // Output: YES 
echo isBalancedBracket($input2) . PHP_EOL; // Output: NO 
echo isBalancedBracket($input3) . PHP_EOL; // Output: YES 


?>