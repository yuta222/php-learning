<?php
if (!isset($argv[1])) {
    echo "使い方: php answer9.php 点数\n";
    exit(1);
}

$input = $argv[1];

if (!is_numeric($input)) {
    echo "数値を入力してください\n";
    exit(1);
}

$score = (int) $input;

if ($score < 0 || $score > 100) {
    echo "0から100で入力してください\n";
    exit(1);
}

if ($score >= 90) {
    $grade = "S";
} elseif ($score >= 80) {
    $grade = "A";
} elseif ($score >= 70) {
    $grade = "B";
} elseif ($score >= 60) {
    $grade = "C";
} else {
    $grade = "再挑戦";
}

echo "点数: {$score}\n";
echo "評価: {$grade}\n";
