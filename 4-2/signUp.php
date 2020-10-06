<?php
require_once('db_connect.php');

if(isset($_POST['signUp'])){
    if(empty($_POST['name'])){
        $errorMessage = '名前が入力されていません';
        echo $errorMessage;
    }elseif(empty($_POST['password'])){
        $errorMessage = 'パスワードが入力されていません';
        echo $errorMessage;
    }

    if(!empty($_POST['name']) && !empty($_POST['password'])){
        $username = $_POST['name'];
        $password = $_POST['password'];

        $pdo = db_connect();
        $sql = "INSERT INTO users(name,password) VALUES(:name,:password)";
        try{
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name',$username);
            $stmt->bindParam(':password',$password);
            $hash = password_hash($password,PASSWORD_DEFAULT);
            $password = $hash;
            $stmt->execute();

            $signUpMessage = '登録が完了しました！';
            echo $signUpMessage;
        }catch(PDOException $e){
            echo 'Error:'. $e->getMessage();
            die();
        }
    }
}




?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userStyle.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
    <div class="header">
        <h1>ユーザー登録画面</h1>
    </div>
    <div class="main">
        <form action="signUp.php" method="POST">
            <input type="name" name="name" id="name" value="<?php if (!empty($_POST["name"])) {
                echo htmlspecialchars($_POST["name"], ENT_QUOTES);
            }?>" placeholder="ユーザー名"  />
            <br>
            <br>
            <input type="password" name="password" id="password" value="<?php if (!empty($_POST["password"])) {
                echo htmlspecialchars($_POST["password"], ENT_QUOTES);
            }?>" placeholder="パスワード"  />
            <br>
            <br>
            <input type="submit" name="signUp" id="signUp" value="新規登録" class="user"  />
        </form>
    </div>
    </div>
</body>
</html>