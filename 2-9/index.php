<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2-9</title>
</head>
<body>
    <p><?php
        for($number=1; $number<=100; $number++){
            // 3の倍数かつ5の倍数
            if($number%3===0 && $number%5===0){
                echo 'FizzBuzz!'. '<br>';
            }
            // ３の倍数であるが５の倍数ではない
            elseif($number%3===0){
                echo 'Fizz!'. '<br>';
            }
            //３の倍数ではないが、５の倍数ではある
            elseif($number%5===0){
                echo 'Buzz!'. '<br>';
            }
            // それ以外
            else{
                echo $number . '<br>';
            }
            
        }
    ?></p>
</body>
</html>