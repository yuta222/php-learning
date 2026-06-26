<?php
$score = 82;

echo "点数: {$score}\n";

if ($score < 0 || $score > 100) {
    echo "点数が不正です\n";
} elseif ($score >= 90) {
    echo "評価: S\n";
} elseif ($score >= 80) {
    echo "評価: A\n";
} elseif ($score >= 70) {
    echo "評価: B\n";
} elseif ($score >= 60) {
    echo "評価: C\n";
} else {
    echo "評価: 再挑戦\n";
}
