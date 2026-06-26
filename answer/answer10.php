<?php
$height = "";
$weight = "";
$errors = [];
$bmi = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $height = trim($_POST["height"] ?? "");
    $weight = trim($_POST["weight"] ?? "");

    if ($height === "" || !is_numeric($height) || (float) $height <= 0) {
        $errors[] = "身長は0より大きい数値で入力してください";
    }

    if ($weight === "" || !is_numeric($weight) || (float) $weight <= 0) {
        $errors[] = "体重は0より大きい数値で入力してください";
    }

    if ($errors === []) {
        $heightMeter = (float) $height / 100;
        $bmi = (float) $weight / ($heightMeter * $heightMeter);
    }
}

function h(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, "UTF-8");
}
?>
<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>第10題 Webフォーム 解答</title>
</head>
<body>
    <h1>BMI計算</h1>

    <?php if ($errors !== []): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= h($error) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post">
        <div>
            <label>
                身長(cm)
                <input type="text" name="height" value="<?= h($height) ?>">
            </label>
        </div>
        <div>
            <label>
                体重(kg)
                <input type="text" name="weight" value="<?= h($weight) ?>">
            </label>
        </div>
        <button type="submit">計算する</button>
    </form>

    <?php if ($bmi !== null): ?>
        <p>BMI: <?= h(number_format($bmi, 1)) ?></p>
    <?php endif; ?>
</body>
</html>
