<?php

    class Message {

        //メンバ変数1
        private $body;

        //メンバ変数2
        private $sender;

        //メンバ変数3
        private $receiver;

        // コンストラクタ
        public function __construct($message, $sender, $receiver){
            $this->body = $message;
            $this->sender = $sender;
            $this->receiver = $receiver;
        }

        //メンバ関数1
        public function send(){
            echo $this->body . "\n";
        }

        //メンバ関数2
        public function sender(){
            echo $this->sender . "\n"; 
        }

        // メンバ関数3
        public function reciever(){
            echo $this->receiver . "\n"; 
        }

        // メンバ関数4
        public function mail(){
            echo "送信者：" . $this->sender . "\n";
            echo "宛先：" . $this->receiver . "\n";
            echo "メール内容：" . $this->body . "\n";
        }

    }

    $email001 = new Message("Hello, World", "NagatomoKazuya", "tech boost");

    $email001->mail();
  
?>