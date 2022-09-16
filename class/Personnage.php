<?php 

class Personnage{

    const MAX_VIE = 130;

    public $vie = 80;
    public $atk = 30;
    public $name;

    public function __construct(string $nom)
    {
        $this->name = $nom;
    
    }

    public function crier(string $message = "Crier"){
        echo "<div>".$this->name." dit : ".$message."</div>";
    }

    public function setAtk(int $atk)
    {
        $this->atk += $atk;
    }

    public function mort(){
        if($this->vie <= 0){
            echo "<div>".$this->name." est mort</div>";
        }else{
            echo "<div>".$this->name." est vivant</div>";
        }
    }

    public function regenerer(int $vie = null){
        if(is_null($vie))
        {
            $this->vie = self::MAX_VIE;
        }else{
            $this->vie += $vie;
            if($this->vie > self::MAX_VIE)
            {
                $this->vie = self::MAX_VIE;
            }
        }
    }

    public function pasNegatif()
    {
        if($this->vie < 0){
            $this->vie = 0;
        }
    }

    public function attaque(Personnage $cible){
        $cible->vie -= $this->atk;
        $cible->pasNegatif();
    }
}