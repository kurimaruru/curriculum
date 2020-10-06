<?php
require_once('function.php');
require_once('db_connect.php');

session_start();

check_user_login();

if(isset($_POST['register'])){
    if(empty($_POST['title'])){
        echo 'タイトルが入力されていません';
    }elseif(empty($_POST['date'])){
        echo '発売日が入力されていません';
    }elseif(empty($_POST['stock'])){
        echo '在庫数が入力されていません';
    }

    if(!empty($_POST['title']) && !empty($_POST['date']) && !empty($_POST['stock'])){
        $title = $_POST['title'];
        $date = $_POST['date'];
        $stock = $_POST['stock'];
        $pdo = db_connect();
        $sql = "INSERT INTO books(title,date,stock) VALUES (:title,:date,:stock)";
        try{
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':title',$title);
            $stmt->bindParam(':date',$date);
            $stmt->bindParam(':stock',$stock);
            $stmt->execute();
            header("location:book_post.php");
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
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <h1>在庫一覧画面</h1>
            <button onclick="location.href='signUp.php'" class="new-user">新規ユーザー登録</button>
            <button onclick="location.href='logout.php'" class="logout">ログアウト</button>
        </div>
        <div class="main">
            <table>
                <tr class="infomation">
                    <td>タイトル</td>
                    <td>発売日</td>
                    <td>在庫数</td>
                    <td></td>
                </tr>
                <?php $show_book_table = show_book_table() ;?>
                <?php while($row = $show_book_table->fetch(PDO::FETCH_ASSOC)){?>
                    <tr>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['date'];?></td>
                        <td><?php echo $row['stock'];?></td>
                        <td><button onclick="location.href='delete.php?id=<?php echo $row['id']; ?>'" class="delete">削除</button></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <div class="footer">
            <form action="main.php" method="POST">
                <h2>本の登録画面</h2>
                <input type="text" name="title" id="title" value="<?php if (!empty($_POST["title"])) {
                    echo htmlspecialchars($_POST["title"], ENT_QUOTES);
                }?>" placeholder="タイトル"><br><br>
                <input type="text" name="date" id="date" value="<?php if (!empty($_POST["date"])) {
                    echo htmlspecialchars($_POST["date"], ENT_QUOTES);
                }?>" placeholder="発売日"><br><br>
                <p class="stock">在庫数</p>
                <input type="number" name="stock" id="stock" value="<?php if (!empty($_POST["stock"])) {
                echo htmlspecialchars($_POST["stock"], ENT_QUOTES);
            }?>"><br><br>
                <input type="submit" name="register" id="register" value="登録">
            </form>
        </div>
    </div>
</body>
</html>