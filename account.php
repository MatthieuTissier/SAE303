<?php

require "poo_traitement.php";

class account{

    private nom;
    private prénom;
    private id;
    private email;
    private telephone;
    private mdp;

    public function __construct(string $nom, string $prénom, string $id, string $email, string $telephone, string $mdp){
        $this->nom = $nom;
        $this->prénom = $prénom;
        $this->id = $id;
        $this->email= $email;
        $this->telephone = $telephone;
        $this->mdp = $mdp;


    }
    public function delete(Traitement $traitement){
        if ($traitement->find($this->id)){
            $traitement->delete($this->id);
            unset($this);
            return 1;
        } else {
            return 0;
        }

    }
    public function create(Traitement $traitement, string $table){
        $args = [$this -> nom,$this -> prénom,$this -> id,$this -> email,$this -> telephone,$this -> mdp]
        $traitement -> insert()
    }

}