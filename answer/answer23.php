<?php
function greet(string $name): string
{
    if ($name === "") {
        $name = "ゲスト";
    }

    return "こんにちは、{$name}さん";
}

echo greet("Taro") . "\n";
echo greet("") . "\n";
