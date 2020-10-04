<?php
// DBサーバのURL
$db['host'] = "localhost";
// ユーザー名
$db['user'] = "root";
// ユーザー名のパスワード
$db['pass'] = "root";
// データベース名
$db['dbname'] = "checktest4";

$db['dsn']= "mysql: host=localhost; dbname=checktest4; charset=utf8";
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

db_connect();
?>