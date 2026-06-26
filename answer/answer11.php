<?php
$filePath = __DIR__ . "/diary.json";
$command = $argv[1] ?? "";

function showUsage(): void
{
    echo "使い方:\n";
    echo "  php answer11.php add \"日記本文\"\n";
    echo "  php answer11.php list\n";
}

function loadEntries(string $filePath): array
{
    if (!file_exists($filePath)) {
        return [];
    }

    $json = file_get_contents($filePath);
    $entries = json_decode($json, true);

    if (!is_array($entries)) {
        return [];
    }

    return $entries;
}

function saveEntries(string $filePath, array $entries): void
{
    $json = json_encode($entries, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents($filePath, $json);
}

if ($command === "add") {
    $body = trim($argv[2] ?? "");

    if ($body === "") {
        echo "日記本文を入力してください\n";
        showUsage();
        exit(1);
    }

    $entries = loadEntries($filePath);
    $entries[] = [
        "date" => date("Y-m-d H:i:s"),
        "body" => $body,
    ];

    saveEntries($filePath, $entries);
    echo "日記を保存しました\n";
    exit(0);
}

if ($command === "list") {
    $entries = loadEntries($filePath);

    if ($entries === []) {
        echo "日記はまだありません\n";
        exit(0);
    }

    foreach ($entries as $index => $entry) {
        $number = $index + 1;
        echo "{$number}. {$entry["date"]} {$entry["body"]}\n";
    }

    exit(0);
}

showUsage();
exit(1);
