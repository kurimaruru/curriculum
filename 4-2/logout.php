<?php
session_start();

$_SESSION = array();

session_destroy();

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userStyle.css">
    <title>Document</title>
</head>
<body>
    <div class="logout">
        <h1>ログアウト画面</h1>
        <p>ログアウトしました</p>
        <a href="login.php">ログイン画面に戻る</a>
    </div>
</body>
</html>