<?php
function a000124($n) {
    $result = array();
    $current_number = 1;

    for ($i = 1; $i <= $n; $i++) {
        $result[] = $current_number;
        $current_number += $i;
    }

    return $result;
}

function main() {
    // Input jumlah angka dalam deret (n) secara manual
    $n = 7;

    $sequence = a000124($n);

    $output = implode('-', $sequence);
    echo "Output: " . $output . PHP_EOL;
}

main();
?>
