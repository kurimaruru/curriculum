<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php
        function getRectangularSolidVolume ($length,$width,$height){
            // 関数の中で定義したローカル変数は、その関数の中でしか有効にならない
            $volume = $length * $width * $height ;
            print "直方体の体積は" . $volume . "です";
        }
        // 縦、横、高さの引数
        getRectangularSolidVolume(5,10,8);
    ?></p>
</body>
</html>