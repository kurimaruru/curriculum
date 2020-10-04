<?php
// クラスとプロパティの宣言、、、プロパティとはクラスが持つ変数のこと
    class Taiyaki{
        public $content ;

    // クラスが持つメソッドを定義、、、メソッドとは処理をまとめたもの
    public function __construct($nakami){
        // __constructとはインスタンスが生成されるときに呼ばれる関数
        // $thisとは『このクラスの』という意味、クラス内のプロパティやメソッドにアクセスするときに使う
        $this->content = $nakami;
    }

    // たい焼きクラスが持つ通常メソッド
        public function whatIsContent(){
            echo '中身は'. $this->content. 'です';
        }
    }
// あんこのたい焼き,,,あんこ＝$nakami
        $taiyaki_anko = new Taiyaki('あんこ');
        $taiyaki_anko->whatIsContent();
// クリームのたい焼き
        $taiyaki_cream = new Taiyaki('クリーム');
        $taiyaki_cream->whatIsContent();

?>
