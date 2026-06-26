<?php
function addTax(int $price): int
{
    return (int) floor($price * 1.1);
}

function judgePass(int $score): string
{
    if ($score >= 60) {
        return "合格";
    }

    return "不合格";
}

function formatYen(int $price): string
{
    return number_format($price) . "円";
}

$taxIncluded = addTax(1200);
$result = judgePass(75);

echo "税込: " . formatYen($taxIncluded) . "\n";
echo "判定: {$result}\n";
