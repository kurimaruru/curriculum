<?php
    require_once('db_connect.php');

    // $errorMessage = " ";
    // $signUpMessage = " ";
    // 登録ボタンが押された時
    if(isset($_POST['signUp'])){
        if(empty($_POST['name'])){
            $errorMessage = 'ユーザーIDが未入力です';
            echo $errorMessage ;
        }elseif(empty($_POST['password'])){
            $errorMessage = 'パスワードが未入力です';
            echo $errorMessage;
        }

        if(!empty($_POST['name'] && !empty($_POST['password']))){
            $username = $_POST['name'];
            $password = $_POST['password'];

            // $dsn = sprintf('mysql: host%s; dbname;%s; charset=utf8',$db['host'],$db['dbname']);
            $sql = "INSERT INTO users(name,password) VALUES(:name,:password)";
            $pdo = db_connect();
            try{
                // $pdo = new PDO($dsn,$db['user'],$db['pass'],array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':name',$username);
                $stmt->bindParam(':password',$password);
                $hash = password_hash($password,PASSWORD_DEFAULT);
                $password = $hash ;
                $stmt->execute();                                           
                // var_dump($username);
                // var_dump($password);
                // var_dump($hash);
                // echo '<br>';
                $signUpMessage = '登録が完了いたしました';
                echo $signUpMessage;

            }catch(PDOException $e){
                echo 'データベースに誤りがあります';
            }
        }
    }









?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h1>新規登録</h1>
    <form method="POST" action="signUp.php">
        user:<br>
        <input type="text" name="name" id="name" value="<?php if (!empty($_POST["name"])) {
    echo htmlspecialchars($_POST["name"], ENT_QUOTES);
}?>">
        <br>
        password:<br>
        <input type="password" name="password" id="password" value="<?php if (!empty($_POST["password"])) {
    echo htmlspecialchars($_POST["password"], ENT_QUOTES);
}?>"><br>
        <input type="submit" value="submit" id="signUp" name="signUp">
    </form>
</body>
</html>
