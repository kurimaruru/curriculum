<?php
require_once('db_connect.php');

session_start();

if(isset($_POST['login'])){
    if(empty($_POST['name'])){
        echo '名前が入力されていません';
    }elseif(empty($_POST['password'])){
        echo 'パスワードが入力されていません';
    }

    if(!empty($_POST['name']) && !empty($_POST['password'])){
        $name = htmlspecialchars($_POST['name']);
        $password = htmlspecialchars($_POST['password']);

        $pdo = db_connect();
        $sql = "SELECT * FROM users WHERE name = :name";
        try{
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name',$name);
            $stmt->execute();
        }catch(PDOException $e){
            echo "Error:". $e->getMessage();
            die();
        }

        if($row =$stmt->fetch(PDO::FETCH_ASSOC) ){
            if(password_verify($password,$row['password'])){
                $_SESSION["user_id"] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                header("location: main.php");
            }else{
                echo 'パスワードに誤りがあります';
            }
        }else{
            echo 'ユーザー名かパスワードに誤りがあります';
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
        <div class="header clearfix">
            <div class="header-left">
                <h1>ログイン画面</h1>
            </div>
            <div class="header-right">
                <button onclick="location.href='signUp.php'" class="new-user">新規ユーザー登録</button>
            </div>
        </div>
        <div class="main clearfix">
            <form action="login.php" method="POST">
                <input type="name" name="name" id="name" value="" placeholder="ユーザー名"/><br><br>
                <input type="password" name="password" id="password" value="" placeholder="パスワード" /><br><br>
                <input type="submit" name="login" id="login" value="ログイン" class="user"/>
            </form>
        </div>
    </div>
</body>
</html>