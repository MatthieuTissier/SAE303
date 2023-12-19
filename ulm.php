<?php 
class ULM extends Datatable{

    protected $id;
    protected $type;
    protected $etat;
    protected $traitement;

    public function __construct(string $id, string $type, bool $etat){
        $this->id = $id;
        $this->type = $type;
        $this->etat = $etat;
        $this->traitement = new Traitement("ulm");}

    public function ChangeState(){
        if (boolval($this -> etat)){
            $this -> etat = 0;
            $this -> update(["etat"],[0]);
        }
        else{
            $this -> etat = 1;
            $this -> update(["etat"],[1]);
        }
    }

    }