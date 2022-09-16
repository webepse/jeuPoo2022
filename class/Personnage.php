<?php 

class Personnage{
    public $vie;
    public $atk;
    public $name;

    public function __construct($nom,$atk,$vie)
    {
        $this->name = $nom;
        $this->atk = $atk;
        $this->vie = $vie;
    }

    public function crier(){
        echo "<div>".$this->name."dit : LEEROY JENKINS!!</div>";
    }

    public function mort(){
        if($this->vie <= 0){
            echo "<div>".$this->name." est mort</div>";
        }else{
            echo "<div>".$this->name." est vivant</div>";
        }
    }
}