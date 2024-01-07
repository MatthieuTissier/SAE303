<?php
//namespace App\Models;

//use App\Database;
require "poo_database.php";

class Model extends Database {
    // Table de la base de données
    protected $table;

    // Instance de connexion
    private $db;
}

