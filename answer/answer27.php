<?php
$name = trim($argv[1] ?? "");

if ($name === "") {
    echo "名前を入力してください\n";
    exit(1);
}

if (mb_strlen($name) > 10) {
    echo "名前は10文字以内です\n";
    exit(1);
}

echo "ようこそ、{$name}さん\n";
