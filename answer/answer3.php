<?php
$title = "PHP入門";
$author = "山田太郎";
$message = "{$author}さんの{$title}を読みます";
$length = mb_strlen($message);

echo "【{$title}】\n";
echo "{$message}\n";
echo "文字数: {$length}\n";
