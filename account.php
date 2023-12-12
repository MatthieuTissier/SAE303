<?php

require "poo_traitement.php";

class Account{

    private $nom;
    private $prenom;
    private $id;
    private $email;
    private $telephone;
    public $mdp;
    private $type = 0;

    public function __construct(string $nom, string $prenom, int $id, string $email, string $telephone, string $mdp){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->id = $id;
        $this->email= $email;
        $this->telephone = $telephone;
        $this->mdp = $mdp;


    }
    public function delete(Traitement $traitement){
        if ($traitement->find($this->id)){
            $traitement->delete($this->id); 
            return 1;
        } else {
            return 0;
        }

    }
    public function create(Traitement $traitement, array $columns){
        if (empty($traitement -> find($this -> id))){
        $args = ["'".$this -> nom."'","'".$this -> prenom."'","'".$this -> id."'","'".$this -> email."'","'".$this -> telephone."'","'".$this -> mdp."'", $this -> type,];
        $traitement -> insert($args, $columns);
        return 1;
    } else return 0;

}
    public static function verify(Traitement $traitement, string $id, string $mdp){
        $search = $traitement -> find($id);
        if (!empty($search)){
            if ($search['mdp'] == hash('sha256', $mdp)){
                return $search;
            }
            else {

             return 1;}
        } 
        else {
            return 0;}
    }
    public static function getRows(){
        return array_keys(get_class_vars('Account'));
    } 
}