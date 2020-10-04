<!-- 例外処理について -->
<?php
    function divide($int1,$int2){
        try{
            // 例外が発生する可能性があるコード
            if ($int2 == 0){
                // throwで例外を投げる
                throw new Exception('0で割ることはできません');
            }
            return $int1 / $int2 ;
        }
        // 例外をキャッチする
        catch(Exception $e){
            echo '例外処理が発生しました';
            echo '<br>';
            // エラーメッセージを表示
            echo $e->getMessage();
        }
    }

    echo divide(6,0);
?>