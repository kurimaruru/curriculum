<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $testFile = "test.txt";
        $contents = "こんにちは！";
        // is_writableは書き込み可能か判断する
        if(is_writable($testFile)){
            // 対象ファイルを開く
            $fp = fopen($testFile,"w");
            // w,a,rは順に上書き、追記、読み込み
            // 書き込みを行う
            fwrite($fp,$contents);
            // ファイルを閉じる
            fclose($fp);
            echo "writable!";
        }
        else{
            // 書き込み不可の場合exitで終了
            echo "not writable!";
            exit;
        }
    ?>

    <?php
        $test_file = "test2.txt";
        // is_readdableは読み込み可能か判断
        if(is_readable($test_file)){
            $fp = fopen($test_file,"r");
            // fgetsは開いたファイルから１行ずつ読み込み
            while($line = fgets($fp)){
                echo $line . "<br>";
                fclose($fp);
            }
        }
        else{
            echo "not readdable!";
            exit;
        }
    ?>
</body>
</html>