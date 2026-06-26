<?php
$scores = [72, 88, 91, 65, 79];
$total = 0;

foreach ($scores as $index => $score) {
    $personNumber = $index + 1;
    echo "{$personNumber}人目: {$score}点\n";
    $total += $score;
}

$average = $total / count($scores);
$max = max($scores);
$min = min($scores);

echo "合計: {$total}点\n";
echo "平均: {$average}点\n";
echo "最高: {$max}点\n";
echo "最低: {$min}点\n";
