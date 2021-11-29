<?php

class eventosModel extends Mysql{
    
    public $intIdE;
    public $strE;
    public $strDescripcion;
    public $intDia;
    public $intAno;
    public $intMes;
    public $strContraseña;
    public $strEmail;
    
    public function __construct() {
        parent:: __construct();
        ; }
        
    public function selectEventos(){
    $sql = "SELECT * FROM eventos";
    $request = $this->select_all($sql);
    return $request;
 }
 public function insertEvento(string $evento, string $desp, int $dia, string $mes, int $ano){
     
   $this->strE = $evento;
   $this->strDescripcion = $desp;
   $this->intDia = $dia; 
   $this->intMes = $mes; 
   $this->intAno = $ano; 
   
       $query_insert = "INSERT INTO eventos (nombreEvento,descripcionEvento,diaEvento,mesEvento,anoEvento) VALUES (?,?,?,?,?)";
       $arrData = array($this->strE, $this->strDescripcion, $this->intDia, $this->intMes, $this->intAno);
       $request_insert = $this->insert($query_insert,$arrData);
       $return = $request_insert;
       
   return $return;
 }
 
 public function selectEvento($idrol){
     $this->intIdrol = $idrol;
     $sql ="SELECT * FROM eventos WHERE codEvento LIKE '$this->intIdrol'";
     $request = $this->select($sql);
     return $request;
 }
 
 public function updateEvento(int $idrol,string $evento, string $desp, int $dia, string $mes, int $ano){
   $this->intIdE = $idrol;
   $this->strE = $evento;
   $this->strDescripcion = $desp;
   $this->intDia = $dia; 
   $this->intMes = $mes; 
   $this->intAno = $ano; 

    $sql = "UPDATE eventos SET nombreEvento = ?, descripcionEvento = ?, diaEvento = ?, mesEvento = ?, anoEvento = ? WHERE codEvento = $this->intIdE";
    $arrData = array($this->strE, $this->strDescripcion, $this->intDia, $this->intMes, $this->intAno);
    $request = $this->update($sql,$arrData);

    return $request;
 }
 public function deleteEvento(int $idrol){
    $this->intIE = $idrol;
    
        $sql = "DELETE FROM `eventos` WHERE `codEvento` = $this->intIE";
        $request = $this->delete($sql);
        if($request){
            $request = 'ok';
        }else{
            $request = 'exist';
        }
    
    return $request;
}

public function loginUser(string $usuario, string $contraseña) {
     $this->strContraseña = $contraseña;
     $this->strEmail = $usuario;
     $sql = "SELECT idus FROM admin WHERE usuario LIKE '$this->strEmail' AND Password LIKE '$this->strContraseña'";
     $request = $this->select($sql);
     return $request;
     
 }
      
}


?>