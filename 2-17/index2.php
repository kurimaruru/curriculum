<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">
    <?php
        date_default_timezone_set('Asia/Tokyo');
        $time = intval(date("H",time()));
        echo "現在" . $time . "時台です" . "<br>";
        if(5 <= $time && $time <= 11){
            echo "おはようございます";    
        }
        elseif(11 <= $time && 16 <= $time){
            echo "こんにちは";
        }
        else{
            echo "こんばんは";
        }
    ?>
    </h1>
</body>
</html>