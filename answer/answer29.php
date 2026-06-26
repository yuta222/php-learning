<?php
$filePath = __DIR__ . "/shopping_memo.json";
$command = $argv[1] ?? "";

function showUsage(): void
{
    echo "使い方:\n";
    echo "  php answer29.php add \"商品名\"\n";
    echo "  php answer29.php list\n";
}

function loadItems(string $filePath): array
{
    if (!file_exists($filePath)) {
        return [];
    }

    $items = json_decode(file_get_contents($filePath), true);

    if (!is_array($items)) {
        return [];
    }

    return $items;
}

function saveItems(string $filePath, array $items): void
{
    $json = json_encode($items, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents($filePath, $json);
}

if ($command === "add") {
    $item = trim($argv[2] ?? "");

    if ($item === "") {
        echo "商品名を入力してください\n";
        exit(1);
    }

    $items = loadItems($filePath);
    $items[] = $item;
    saveItems($filePath, $items);

    echo "保存しました: {$item}\n";
    exit(0);
}

if ($command === "list") {
    $items = loadItems($filePath);

    if ($items === []) {
        echo "買い物メモはありません\n";
        exit(0);
    }

    foreach ($items as $index => $item) {
        $number = $index + 1;
        echo "{$number}. {$item}\n";
    }

    exit(0);
}

showUsage();
exit(1);
