<?php
if (!isset($argv[1])) {
    echo "使い方: php answer26.php 税抜価格\n";
    exit(1);
}

$input = $argv[1];

if (!is_numeric($input)) {
    echo "数値を入力してください\n";
    exit(1);
}

$price = (int) $input;
$taxIncluded = (int) floor($price * 1.1);

echo "税抜: {$price}円\n";
echo "税込: {$taxIncluded}円\n";
