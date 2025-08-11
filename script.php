<?php 
    class player {
        public $hp = 20;
        // public $accuracy 0.5;
        public $damage = 10;  

        public function attack($enemy) {
            $enemy->hp -= $this->damage;
            $enemy->reciveDamage($this);
        }

        public function reciveDamage($enemy) {
            echo "player recebeu $enemy->damage de dano";
        }
    }

    class enemy {
        public $hp = 20;
        // public $accuracy 0.5;
        public $damage = 5; 

        public function attack($player) {
            $player->hp -= $this->damage;
            $player->reciveDamage($this);
        }

        public function reciveDamage($player) {
            echo "enemy recebeu $player->damage de dano";
        }
    }

    class run {

    }

    session_start();

    $p1 = new player();
    $e1 = new enemy();

    $action = $_GET["action"];
    
    if ($action === "ataque") {
        $p1->attack($e1);
        $_SESSION["info"] = $e1->hp;
        header("location: index.php?");
    }

    var_dump($_SESSION["info"]);
?>