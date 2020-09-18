<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php
        $fruits=["apple"=>"りんご","orange"=>"みかん","peach"=>"もも"];
        foreach($fruits as $key=>$value){
            // 連結演算子
            echo $key . 'といえば' . $value . '<br>';
        }
    ?></p>
</body>
</html>