<?php
// セッション開始
session_start();
// DBサーバのURL
$db['host'] = "localhost";
// ユーザー名
$db['user'] = "root";
// ユーザー名のパスワード
$db['pass'] = "root";
// データベース名
$db['dbname'] = "YIGroupBlog";

$db['dsn']= "mysql: host=localhost; dbname=YIGroupBlog; charset=utf8";
function db_connect(){
    global $db;
    try {
        $dbh = new PDO($db['dsn'],$db['user'],$db['pass']);
        return $dbh ;
    } catch (PDOException $e) {
        echo 'Error:' . $e->getMessage();
        die();
    }
}

?>  
