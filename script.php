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
    
    $history = [];
    $action = $_GET['action'];

    if (isset($_GET['history'])) {
        $historyArray = unserialize($_GET['history']);
        for ($i=0; $i < count($historyArray); $i++) { 
            $history[] = $historyArray[$i];
        }   
    }

    $history[] = $action;

    $historySerialized = serialize($history);

    header("location: index.php?history=$historySerialized");
?>