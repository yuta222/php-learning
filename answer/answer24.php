<?php
$users = [
    ["name" => "Taro", "age" => 12],
    ["name" => "Hanako", "age" => 22],
    ["name" => "Jiro", "age" => 31],
];

$adultCount = 0;

foreach ($users as $user) {
    echo "{$user["name"]}さん {$user["age"]}歳\n";

    if ($user["age"] >= 20) {
        $adultCount++;
    }
}

echo "20歳以上: {$adultCount}人\n";
