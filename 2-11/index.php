<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- actionはデータを渡す先のページ、methodのpostは見られたくない、書き換えられたくないデータの時 -->
    <form action="result.php" method="post">
        名前: <input type="text" name="my_name" />
        <br>
        メールアドレス: <input type="email" name="email" />
        <br>
        パスワード: <input type="password" name="password" />
        <br>
        <input type="submit" value="送信" />
    </form>
</body>
</html>