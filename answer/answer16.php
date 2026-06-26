<?php
$age = 12;

if ($age < 6) {
    $price = "無料";
} elseif ($age < 13) {
    $price = "500円";
} elseif ($age < 65) {
    $price = "1000円";
} else {
    $price = "700円";
}

echo "年齢: {$age}\n";
echo "料金: {$price}\n";
