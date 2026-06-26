<?php
$name = "";
$message = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");

    if ($name === "") {
        $error = "名前を入力してください";
    } else {
        $message = "こんにちは、{$name}さん";
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
    <title>第28題 あいさつフォーム 解答</title>
</head>
<body>
    <h1>あいさつフォーム</h1>

    <?php if ($error !== ""): ?>
        <p><?= h($error) ?></p>
    <?php endif; ?>

    <form method="post">
        <label>
            名前
            <input type="text" name="name" value="<?= h($name) ?>">
        </label>
        <button type="submit">送信</button>
    </form>

    <?php if ($message !== ""): ?>
        <p><?= h($message) ?></p>
    <?php endif; ?>
</body>
</html>
