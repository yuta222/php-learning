<?php
$items = ["牛乳", "パン", "卵", "りんご"];

foreach ($items as $index => $item) {
    $number = $index + 1;
    echo "{$number}. {$item}\n";
}

echo "品数: " . count($items) . "\n";
