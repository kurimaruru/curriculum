
<?php
require_once('db_connect.php');
// $_SESSION["user_name"]が空だった場合、ログインページにリダイレクトする
    function check_user_login(){
        session_start();
        if(empty($_SESSION['user_name'])){
            header("Lacation: login.php");
            exit;
        }
    }

    function show_comment($comment_id){
        $pdo = db_connect();
        $sql = "SELECT * FROM comments WHERE post_id = :post_id";
        $comment_stmt = $pdo->prepare($sql);
        $comment_stmt->bindParam(':post_id',$comment_id);
        $comment_stmt->execute();
        return $comment_stmt ;
    }
    
?>
    
