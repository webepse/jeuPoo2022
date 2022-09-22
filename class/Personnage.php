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

    /**
     * fonction qui permet de crier
     *
     * @param string $message
     * @return void
     */
    public function crier(string $message = "Crier"): void
    {
        echo "<div>".$this->name." dit : ".$message."</div>";
    }

    /**
     * Permet d'ajouter de la puissance d'attaque à un personnage
     *
     * @param integer $atk
     * @return void
     */
    public function setAtk(int $atk): void
    {
        $this->atk += $atk;
        // $this->atk = $this->atk + $atk;
        //$this->atk++
        //$this->atk--
    }

    /**
     * Permet de vérifier et indiquer le statut mort/vie du personnage
     *
     * @return void
     */
    public function mort(): void
    {
        if($this->vie <= 0){
            echo "<div>".$this->name." est mort</div>";
        }else{
            echo "<div>".$this->name." est vivant</div>";
        }
    }

    /**
     * Permet de redonner de la vie à un perso
     *
     * @param integer|null $vie
     * @return void
     */
    public function regenerer(?int $vie = null): void
    {
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

    /**
     * Permet de vérifier que la vie n'est pas en dessous de 0
     *
     * @return void
     */
    public function pasNegatif(): void
    {
        if($this->vie < 0){
            $this->vie = 0;
        }
    }

    /**
     * Permet d'attaquer un autre personnage
     *
     * @param Personnage $cible
     * @return void
     */
    public function attaque(Personnage $cible): void
    {
        $cible->vie -= $this->atk;
        $cible->pasNegatif();
    }
}