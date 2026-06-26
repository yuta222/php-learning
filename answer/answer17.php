<?php
$stock = 8;
$order = 3;

echo "在庫: {$stock}個\n";
echo "注文: {$order}個\n";

if ($order <= 0) {
    echo "注文数が不正です\n";
} elseif ($order <= $stock) {
    echo "注文できます\n";
} else {
    echo "在庫が足りません\n";
}
