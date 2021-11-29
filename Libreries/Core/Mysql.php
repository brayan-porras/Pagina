<?php

class Mysql extends Conexion {
    private $conexion;
    private $strquery;
    private $arrvalues;
    
    function __construct() {
        $this->conexion=new Conexion();
        $this->conexion= $this->conexion->conect();
    }
//insertar registros
    public function insert(string $query,array $arrvalues){
        $this->strquery=$query;
        $this->arrvalues=$arrvalues;
        $Insert = $this->conexion->prepare($this->strquery);
        $resInsert = $Insert->execute($this->arrvalues);
        if($resInsert){
            $lastInsert= $this->conexion->lastInsertId();
        }else{
            $lastInsert = 0;
        }
        return $lastInsert;
    }
   //obtener un dato
    public function select(string $query){
        $this->strquery=$query;
        $result = $this->conexion->prepare($this->strquery);
        $result->execute();
        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    //obtener varios datos
    public function select_all(string $query){
       $this->strquery=$query;
        $result = $this->conexion->prepare($this->strquery);
        $result->execute();
        $data = $result->fetchall(PDO::FETCH_ASSOC);
        return $data;
    }
    //modificar
    public function update(string $query,array $arrvalues){
       $this->strquery=$query;
       $this->arrvalues=$arrvalues; 
       $update = $this->conexion->prepare($this->strquery);
       $resExecute = $update->execute($this->arrvalues);
       return $resExecute;
    }
    //eliminar
    public function delete(string $query){
        $this->strquery = $query;
        $result = $this->conexion->prepare($this->strquery);
        $del= $result->execute();
        return $del;
    }
    }
?>