 

<?php
// データベースのような変わらない値は定数で定義する
    define('DB_DATABASE', 'yigroupBlog');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'root');
    define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);
    
    try {
        $dbh = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
        echo 'DBと接続しました。';
    } catch (PDOException $e) {
        // $eには失敗した理由が入る
        echo 'Error:' . $e->getMessage();
        die();
    }
    ?>