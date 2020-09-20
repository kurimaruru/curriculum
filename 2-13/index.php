<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 数学に関する関数 -->
    <p><?php 
    // 切り上げのceil
        $x = 6.4 ;
        echo ceil($x);
        echo '<br>';
    // 切り捨てのfloor
        $x = 6.4 ;
        echo floor($x);
        echo '<br>';
    // 四捨五入のround
        $x = 6.4 ;
        echo round($x);
        echo '<br>';
    // 円周率のpi
        function circleArea($r){
            $circle_area = $r * $r *pi() ;
            echo $circle_area ;
        }
        circleArea(5);
        echo '<br>';
    // 乱数
        echo mt_rand(1,300);
    ?></p>

<!-- 文字に関する関数 -->
    <p><?php
        // 文字の長さのstrlen
        $str = 'rikukurihara';
        echo strlen($str);
        echo '<br>';
        // 検索のstrpos
        $str = 'rikukurihara';
        echo strpos($str,"a");
        echo '<br>';
        // 文字の切り取りのsubstr
        $str = 'kurihara';
        echo substr($str,-3,5);
        echo '<br>';
        // 文字の置き換え、str_replace(置き換える前の文字列, 置き換えた後の文字列, 対象の文字列)
        $str = 'kurihara';
        echo str_replace('kuri','KURI',$str);
        echo '<br>';
        // フォーマット化した文字列を出力するprintf
        $name = "栗原";
        $minute = 1;
        $price = 800;
        printf("%sさん、あと%d時間で駐車料金は%d円です", $name,$minute,$price);
        echo '<br>';
        // sprintf
        $name = '田中';
        $price = 1250 ;
        $shopping = sprintf("%sさん、料金は%d円です",$name,$price);
        echo $shopping ;
    ?></p>
</body>
</html>