<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
          $i = 0 ;
          $num1 = 0;
          while($i <40){
              $num2 = rand(1,6);
              $i ++ ;
              echo $i . '回目=' . $num2 . '<br>';
            //   初期値 0 に乱数を足し、更新された値に乱数を繰り返し足していく
              $num1 += $num2 ;
          if($num1>=40){
            //   初期値が４０以上に達した時処理を停止
              echo '合計'. $i . '回目でゴールしました！';
              exit ;
          }
          }     
          
    ?>
</body>
</html>