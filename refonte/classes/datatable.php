<?php

require "poo_traitement.php";

abstract class Datatable{

   public function delete(){
        if (($this -> traitement)->find($this->id)){
            ($this -> traitement)->delete($this->id); 
            return 1;
        } else {
            return 0;
        }
}
public function create(){
    if (empty($this -> traitement -> find($this -> id))){
        $values = get_object_vars($this);
        $columns = array_keys(get_object_vars($this));
        array_pop($values);
        array_pop($columns);
        foreach($values as $value){
            $args[] = "'".strval($value)."'";
        }
    ($this -> traitement) -> insert($args, $columns);
    return 1;
} else return 0;
}
public function UpdateTable(array $columns, array $values){
    if(!empty($this -> traitement -> find($this -> id))){
        $changes = " SET ";
        foreach ($columns as $index => $column) {
            $changes=$changes.$column." = '".$values[$index]."', ";
        }
        $changes = substr($changes,0,-2);
        $this -> traitement -> update($changes,$this -> id);

    }
}
}
