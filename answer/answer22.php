<?php
function getArea(int $width, int $height): int
{
    return $width * $height;
}

$width = 6;
$height = 4;
$area = getArea($width, $height);

echo "幅: {$width}\n";
echo "高さ: {$height}\n";
echo "面積: {$area}\n";
