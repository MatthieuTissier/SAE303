<?php
require "datatable.php";

class Admin extends Datatable{

    protected $id;
    protected $mdp;


    public function __construct(string $id, string $mdp){
        $this->id = $id;
        $this->mdp = $mdp;
        $this->traitement = new Traitement("admin");


    }
    public static function verify(Traitement $traitement, string $id, string $mdp){
        $search = $traitement -> find($id);
        if (!empty($search)){
            if ($search['mdp'] == hash('sha256', $mdp)){
                return 2;
            }
            else {

             return 1;}
        } 
        else {
            return 0;}
    } 
}