<?php
    class Taiyaki2{
        public $content;

        public function __construct($nakami){
            $this->content = $nakami ;
        }

        public function whatIsContent(){
            echo '中身は'. $this->content . 'だよ';
        }
    }

    $taiyaki_anko = new Taiyaki2('あんこ');
    $taiyaki_anko->whatIsContent();
    $taiyaki_cream = new Taiyaki2('クリーム');
    $taiyaki_cream->whatIsContent();
?>