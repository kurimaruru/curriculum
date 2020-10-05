<?php
    require_once('getData.php');
    $your_name = new getData();
    $get_lastlogin = new getData(); 
    $get_table = new getData();
    
    // $getposts_sql = "SELECT * FROM posts ORDER BY id desc";
    // $pdo = db_connect();
    // try{
    //     $post_data = $pdo->prepare($getposts_sql);
    //     $post_data->execute();
    // }catch(PDOException $e){
    //     echo 'Error'. $e->getMessage();
    // }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
    <div class="header clearfix">
        <div class="left">
            <img src="picture/YIGroup.png" class="image">
        </div>
        <div class="top">
            <p class="user-data">ようこそ<?php $your_name->getUserData();?>さん</p>
        </div>
        <div class="lower">
            <p class="user-data">最終ログイン日時<?php $get_lastlogin->getLastLoginTime();?></p>
        </div>
    </div>
    <div class="main clearfix">
    <table border="1">
        <tr class="menu">
            <td>記事ID</td>
            <td>タイトル</td>
            <td>カテゴリー</td>
            <td>本文</td>
            <td>投稿日</td>
        </tr>
    <?php foreach($get_table->getPostData() as $post_data ){?>
        <tr>
            <td><?php echo $post_data['id']; ?></td>
            <td><?php echo $post_data['title']; ?></td>
            <td><?php echo $post_data['category_no']; ?></td>
            <td><?php echo $post_data['comment']; ?></td>
            <td><?php echo $post_data['created']; ?></td>
        </tr>
    <?php }?>
    </table>

    
    </div>
    <div class="footer">
        <p>Y&IGroup.inc</p>
    </div>
    </div>
</body>
</html>