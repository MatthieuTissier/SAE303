<?php
require "datatable.php";

class Account extends Datatable{

    protected $nom;
    protected $prenom;
    protected $id;
    protected $email;
    protected $telephone;
    protected $mdp;
    protected $type = 0;
    protected $traitement;


    public function __construct(string $nom, string $prenom, string $id, string $email, string $telephone, string $mdp){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->id = $id;
        $this->email= $email;
        $this->telephone = $telephone;
        $this->mdp = $mdp;
        $this->traitement = new Traitement("accounts");


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
}