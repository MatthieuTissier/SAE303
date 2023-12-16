<?php

require "poo_traitement.php";

class ULM{

    private $id;
    private $type;
    private $etat;

    public function __construct(string $id, string $type, string $etat){
        $this->id = $id;
        $this->type = $type;
        $this->etat = $etat;


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