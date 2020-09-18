<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2-7</title>
</head>
<body>
    <p><?php
    // 連想配列
        $colors =["red"=>"赤","blue"=>"青","green"=>"緑"];
        var_dump($colors);
        echo '<br>';
    // colorsに黄色を追加
        $colors["yellow"]="黄色";
        var_dump($colors);
    ?></p>
</body>
</html>