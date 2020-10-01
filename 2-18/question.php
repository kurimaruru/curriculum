<?php
$my_name = $_POST['my_name'];
$numbers = [80,22,20,21];
$languages = ['PHP','Python','JAVA','HTML'];
$commands = ['join','select','insert','update'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper">
    <div class="name">
        <p>お疲れ様です<?php echo $my_name ;?>さん</p>
    </div>
    <div class="form">
        <form action="answer.php" method="post">    
            <h2>①ネットワークのポート番号は何番？</h2>
                <?php foreach($numbers as $number){ ?>
                    <input type="radio" name="answer_number" value="<?php echo $number ;?>">
                    <?php echo $number ;?>
                <?php }?>
            <h2>②Webページを作成するための言語は？</h2>
                <?php foreach($languages as $language){ ?>
                    <input type="radio" name="answer_language" value="<?php echo $language ;?>">
                    <?php echo $language ;?>
                <?php }?>
            <h2>③MySQLで情報を取得するためのコマンドは？</h2>
                <?php foreach($commands as $command){ ?>
                    <input type="radio" name="answer_command" value="<?php echo $command ;?>">
                    <?php echo $command ;?>
                <?php } ?>
            <!-- 隠しパラメータを利用して名前を送信 -->
            <input type="hidden" name="hidden_param" value="<?php echo $my_name ;?>">
            <br>
            <input type="submit" value="回答する">
        </form>
    </div>
</div>
</body>
</html>
