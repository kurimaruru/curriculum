 <?php
require_once('pdo.php');

class getData{

    public $pdo;
    public $data;

    //コンストラクタ
    function __construct()  {
        $this->pdo = db_connect();
    }

    /**
     * ユーザ情報の取得
     *
     * @param 
     * @return array $users_data ユーザ情報
     */
    public function getUserData(){
        $getusers_sql = "SELECT * FROM users limit 1";
        // queryはsql文をデータベースに送信、fetchはデータベースから実際にデータを取得
        $users_data = $this->pdo->query($getusers_sql)->fetch(PDO::FETCH_ASSOC);
        print ($users_data['last_name']);
        print ($users_data['first_name']);
    }
    // 最終ログイン時間を取得
    public function getLastLoginTime(){
        $getusers_sql="SELECT * FROM users WHERE last_login";
        $users_data = $this->pdo->query($getusers_sql)->fetch(PDO::FETCH_ASSOC);
        print ($users_data['last_login']);
    }
    /**
     * 記事情報の取得
     *
     * @param 
     * @return array $post_data 記事情報
     */
    public function getPostData(){
        $getposts_sql = "SELECT * FROM posts ORDER BY id desc";
        $post_data = $this->pdo->query($getposts_sql);
        return $post_data;
    }


}

?>