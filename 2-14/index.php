<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 便利な関数 -->
    <p><?php
        // 要素の数を数えるcount
        $fruits = ['apple','banana','grape','orange','cherry'];
        echo count($fruits) . '<br>';
        // 要素の並び替えるsort
        sort($fruits);
        var_dump($fruits);
        echo '<br>';
        $numbers = [123,34,86,99,45];
        sort($numbers);
        var_dump($numbers);
        echo '<br>';
        // 配列の中にある要素が廃いているか
        // in_array(調べたい文字もしくは数値, 対象の配列)  , if文とよく使う
        if(in_array('apple',$fruits)){
            echo 'there is apple';
        }
        else{
            echo 'there is not apple';
        }
        echo '<br>';
        // 配列を結合させるimplode
        $atstr = implode(":",$fruits);
        var_dump($atstr);
        echo '<br>';
        // 文字列を指定の区切りで配列にする
        $re_fruits = explode(":",$atstr);
        var_dump($re_fruits);
    ?></p>
</body>
</html>