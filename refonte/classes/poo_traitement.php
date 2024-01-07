<?php
//namespace App\Models;

//use App\Database;
require "poo_models.php";


class Traitement extends Model {

	public function __construct(string $table){
		$this->table = $table;
	}
	
	public function requete(string $sql) {
		
    // Récupèrer l'instance de Database
    $this->db = Database::getInstance();

        //Cas des requêtes simples
        return $this->db->query($sql);
    }	

	public function findAll() {
		$query = $this->requete('SELECT * FROM '.$this->table);
		return $query->fetchAll();
	}
	
	public function find(string $id) {
    // Exécuter la requête
    return $this->requete("SELECT * FROM {$this->table} WHERE id = '".$id."'")->fetch();
	}
	
	public function findBy(array $criteres) {
		$champs = [];
		$valeurs = [];

		//Boucler pour "éclater le tableau"
		foreach($criteres as $champ => $valeur){
			$champs[] = $champ;
			$valeurs[]= $valeur;
		}

		//Transformer le tableau en chaîne de caractères, séparée par des AND
		$liste_champs = implode(' AND ', $champs);
		$liste_valeurs = implode('=',$valeurs);
		

		// Exécuter la requête
		return $this->requete("SELECT * FROM {$this->table} WHERE $liste_champs = $liste_valeurs")->fetchAll();
	}
	
	public function insert(array $valeurs, array $colomns) {
    $liste_champs = implode(', ', $colomns);
    $liste_inter = implode(', ', $valeurs);

    // Exécuter la requête
    return $this->requete('INSERT INTO '.$this->table.' ('. $liste_champs.')VALUES('.$liste_inter.')');
	}
	
	public function delete(string $id){
		return $this->requete("DELETE FROM {$this->table} WHERE id = "."'".$id."'");
	}
	public function update(string $changes, string $id){
		return $this -> requete("UPDATE ".$this -> table." SET ".$changes." WHERE id = "."'".$id."'");
	}
}

