<?php 
    class Personnage{

        public function __construct($nom){
            $this->nom = $nom;
        }
        private $vie = 80;
        private $atk = 20;
        private $nom;
        
        public function GetNom(){
            return $this->$nom;
        } 

        public function SetNom($nom){
            $this->nom=$nom;
        }

         public function GetAtk(){
             return $this->atk;
         }

         public function SetAtk($atk){
             $this->atk=$atk;
         }

         public function GetVie(){
             return $this->vie; 
         }

         public function SetVie($vie){
             $this->vie=$vie;
         }

        public function regenerer($vie=null){
            if(is_null($this->GetVie())){
                $this->SetVie();
            } else {
                $this->vie=$vie;
            }
           
        }

        public function mort(){
            return $this->vie <= 0;
        }

        public function attaque($cible){
            $cible->vie-=$this->atk; 
        }
    }
?>