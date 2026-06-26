<?php
$scores = [45, 80, 62, 59, 91];
$passCount = 0;

foreach ($scores as $score) {
    if ($score >= 60) {
        echo "合格: {$score}点\n";
        $passCount++;
    }
}

echo "合格者数: {$passCount}人\n";
