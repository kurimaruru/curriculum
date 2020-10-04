<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php
        // 変数＄の練習
        $message = "hello world";
        echo $message;
        echo '<br>';
        // var_dumpは変数の型情報まで表示してくれる
        var_dump($message);
    ?></p>
    <p><?php 
        // 定数difineの勉強
        define("ADMIN_EMAIL","y-i-group@gmail.com");
        define("LIST_COUNT",15);
        echo ADMIN_EMAIL;
        echo '<br>';
        echo LIST_COUNT;
    ?></p>
    <p><?php
        // 演算子の練習
        $hello = "hello";
        $world = "world";
        echo $hello . $world ;
        // 連結演算子
    ?></p>

    <p><?php
    // if文の練習
        $age = 22 ;
        $is_student = true ;

        if($age<=25 && $is_student){
            echo '学生プランが使えるよ';
        }
        elseif($age>25){
            echo '若者プランが使えるよ';
        }
    ?></p>

    <p><?php
// switch文の練習,ifでelseifが多くなるときにswitchで書く
        $blood = "B";
        switch($blood){
            case 'A':
                print 'A型です';
            break;
            case 'B':
                print 'B型です';
            break;
            case 'O':
                print 'O型です';
            break;
            case 'AB':
                print 'AB型です';
            break;
            default:
            echo 'A/B/O/ABから選択してください';
            
        }
    ?></p>
    <p><?php
    // 三項演算子の練習
        $name = "田中";
        echo ($name!="")? '名前を受け付けました':'名前を入力してください';
    ?></p>

    <p><?php
    // チャレンジ課題
    $name = "taro";
    $password = "pass";

    if($name=='taro' && $password=='pass'){
        echo 'ログイン成功です';
    }
    elseif($name=='taro' && $password!='pass'){
        echo 'パスワードを入力してください';
    }
    elseif($name!='taro' && $password=='pass'){
        echo '名前を入力してください';
    }
    else{
        echo '入力情報が間違っています';
    }
    ?></p>
</body>
</html>