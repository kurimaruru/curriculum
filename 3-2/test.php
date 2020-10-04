<?php
// 作成したdb_connect.phpを読み込む
require_once('db_connect.php');
$name = 'Jiro Yamada';
$password = 'Jiro';

// 実行したいSQL文を準備
// 今回はusersテーブルにレコードを追加                    :name,:passwordのところは何が入るか分からないが場所を確保しているイメージ
$sql = "INSERT INTO users (name, password) VALUES (:name, :password)";
// 関数db_connect()からPDOを取得する
$pdo = db_connect();
try {
// これは引数で渡された指示（SQL文）をMySQLに分かる形に変換===プリペアドステートメント
    $stmt = $pdo->prepare($sql);
// bindParamは値をバインド（固定）する
    $stmt->bindParam(':name',$name);
    $stmt->bindParam(':password',$password);
// execute命令を実行する、、、命令＝$sqlの部分
    $stmt->execute();
    echo 'インサートしました。';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}
?>