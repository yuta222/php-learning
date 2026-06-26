<?php
$cartItems = [
    [
        "name" => "ノート",
        "price" => 300,
        "quantity" => 2,
    ],
    [
        "name" => "ペン",
        "price" => 120,
        "quantity" => 5,
    ],
    [
        "name" => "本",
        "price" => 1800,
        "quantity" => 1,
    ],
];

$total = 0;

foreach ($cartItems as $item) {
    $subtotal = $item["price"] * $item["quantity"];
    $total += $subtotal;

    echo "{$item["name"]}: {$item["price"]}円 x {$item["quantity"]} = {$subtotal}円\n";
}

echo "合計: {$total}円\n";

if ($total >= 3000) {
    echo "送料無料\n";
} else {
    echo "送料500円\n";
}
