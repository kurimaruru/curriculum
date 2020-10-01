<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$hidden_param = $_POST['hidden_param'];
$answer_number = $_POST['answer_number'];
$answer_language = $_POST['answer_language'];
$answer_command = $_POST['answer_command'];

// 選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function answerResult(){
    // グローバル変数にアクセス
    global $answer_number;
    if($answer_number == 80){
        echo '正解';
    }
    else{
        echo '残念。。。';
    } 
}
function answerResult2(){
    global $answer_language;
    if($answer_language == 'HTML'){
        echo '正解';
    }
    else{
        echo '残念。。。';
    } 
}
function answerResult3(){
    global $answer_command;
    if($answer_command == 'select'){
        echo '正解';
    }
    else{
        echo '残念。。。';
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <p><?php echo $hidden_param ;?>さんの結果は・・・？</p>
        <p>①の答え</p>
        <!--作成した関数を呼び出して結果を表示-->
        <?php answerResult();?>
        <p>②の答え</p>
        <!--作成した関数を呼び出して結果を表示-->
        <?php answerResult2();?>
        <p>③の答え</p>
        <!--作成した関数を呼び出して結果を表示-->
        <?php answerResult3();?>
    </div>
</body>
</html>