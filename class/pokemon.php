<!-- faire une class cat 
qui fait des chats en serie 
on veut instancer des chats.
attributs(cttruct) de la class : color, sex, specie, birthdayDate, nom, durée de vie, avatar(lien vers image)
methodes(fct): getters, Nombre de vies restantes, calcul et renvoie l'age pur, calcul et renvoie l'age humain. -->

<?php

class Pokemon{

    private $name;
    private $vie;
    private $atak;
    private $avatar;
  
   
    

    public function __construct($nameParam, $vieParam, $atakParam, $avatarParam){
        $this->name = $nameParam;
        $this->vie = $vieParam;
        $this->atak = $atakParam;
        $this->avatar = $avatarParam;

    }

    public function getName(){
        return $this->name; 

    }


    public function getVie(){
        return $this->vie; 
    }

    public function getAtak(){
        return $this->atak;
    }

    public function getAvatar(){
        return $this->avatar;
    }

    public function regenerer(){
        $this->vie = 100;
        return $this->vie;
    }
    
    public function mort(){

        $this->vie=0;
        return $this->vie;

    }

    


  /*   public function getRemaininglife(){
        return (int) ((7 - $this->life));
    }
   
    public function setRemaininglife($lostLife){

        //$this->life = $thisLife + $lostLife;
        $this->life += $lostLife;


    } */
  
}








