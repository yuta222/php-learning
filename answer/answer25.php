<?php
$stocks = [
    "apple" => 5,
    "banana" => 0,
    "orange" => 8,
];

foreach ($stocks as $name => $stock) {
    if ($stock === 0) {
        echo "{$name}: 売り切れ\n";
    } else {
        echo "{$name}: {$stock}個\n";
    }
}
