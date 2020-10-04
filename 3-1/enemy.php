<?php
// クラスとインスタンスのことをオブジェクトと言い、データをひとまとまりにして管理することをオブジェクト指向という
    class Enemy{
        public $name;
        public $stamina;
        public $attack;
        // staticのプロパティとメソッドはインスタンスを通さないで参照することができる。
        public static $count = 0 ;

        public function __construct($name,$stamina=100,$attack=10){
            $this->name = $name ;
            $this->stamina = $stamina;
            $this->attack = $attack;
            // クラス内でstaticを参照するときはselfを用いる。
            self::$count += 1;
            
        }

        public function powerUp(){
            $this->attack +=10;
            echo '攻撃力が' .$this->attack . 'になった！' . '<br>';
        }
        public static function getEnemyCount(){
            echo self::$count . '体の敵を作りました。';
        }
    }
    // クラスの継承
    class Boss extends Enemy{
    // メソッドのオーバーライド、、、継承元のメソッドを上書き
        public function sayMyName(){
            echo 'ボスの' . $this->name . 'が現れた';
        }
        public function specialAttack(){
            echo 'すごい一撃';
        }
    }

    $slime = new Enemy('スライム');
        echo $slime->stamina ;
        echo $slime->attack;
        $slime->powerUp();
        echo '<br>';

    $kuribo = new Enemy('クリボー',200,10);
        echo $kuribo->stamina;
        echo $kuribo->attack;
        echo '<br>';

    $boss = new Boss('竜王');
    $boss->sayMyName();
    echo '<br>';
    $boss->specialAttack();
    // クラスの外でstaticを参照するときは、クラス名::
    Enemy::getEnemyCount();
    $slime_A = new Enemy('スライム');
    $slime_B = new Enemy('スライム');
    $slime_C = new Enemy('スライム');
    $slime_D = new Enemy('スライム');
    Enemy::getEnemyCount();
?>