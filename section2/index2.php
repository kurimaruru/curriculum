<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php
    // whileで繰り返し練習
        $num= 0 ;
        while($num<=10){
            echo $num;
            $num++;
        }
        echo '<br>';
    // do...whileで最低１回繰り返す処理
        $num = 0 ;
        do{
            echo $num;
            $num++;
        }while($num<=15);
        echo '<br>';
    // for文での繰り返し処理
        for($i=0;$i<10;$i++){
            echo $i ;
        }
        echo '<br>';
    // breakで繰り返し終了
    $num = 0 ;
    while($num < 10){
        echo $num ;
        $num ++;
    if($num==5){
    break;
    }
    }
    ?></p>

    <p><?php 
        // 繰り返し処理の振り返り
        for($i=0;$i<=100;$i++){
            echo $i ;
            echo '<br>';
        }
    ?></p>
</body>
</html>