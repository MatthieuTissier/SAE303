<?php
require "datatable.php";

class Reservation extends Datatable{

    protected $id;
    protected $nom;
    protected $prenom;
    protected $civilite;
    protected $naissance;
    protected $email;
    protected $nbenfant;
    protected $nbadulte;
    protected $handicap;
    protected $type;
    protected $adresse;
    protected $telephone;
    protected $charge;
    protected $familiale;
    protected $date;
    protected $traitementP;
    protected $traitement;


    public function __construct(string $id, string $nom, string $prenom, string $civilite, string $naissance, string $email, int $nbenfant, string $nbadulte, string $handicap, string $type, string $adresse, string $telephone, string $charge, string $familiale){
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->civilite = $civilite;
        $this->naissance = $naissance;
        $this->email = $email;
        $this->nbenfant = $nbenfant;
        $this->nbadulte = $nbadulte;
        $this->handicap = $handicap;
        $this->type = $type;    
        $this->adresse = $adresse;
        $this->telephone = $telephone;
        $this->charge = $charge;
        $this->familiale = $familiale;
        $this->traitementP = 0;
        $this->date = "0000-00-00";
        $this->traitement = new Traitement("reservation");


    }
}