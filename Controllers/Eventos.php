<?php


class Eventos extends Controllers {
    public function __construct() {
        parent:: __construct();  
        session_start();
        ; }
        
        public function eventos(){
            $data['page_tag']=' Eventos';
            $datos = $this->model->selectEventos();
            
            $cadena = "";
            for($i=0; $i < count($datos);$i++){
                $cadena = $cadena.'<div class="card" style="width: 18rem;margin: 10px;border: 2px solid #33ff33 ;justify-content:center">';
                $cadena = $cadena.'';
                $cadena = $cadena.'<h2 style="padding: 10px" ><center>'.$datos[$i]['diaEvento'].' '.$datos[$i]['mesEvento'].' '.$datos[$i]['anoEvento'].'</center></h2>';
                $cadena = $cadena.'<div class="card-body"><h5 class="card-title">'.$datos[$i]['nombreEvento'].'</h5><p class="card-text">'.$datos[$i]['descripcionEvento'].'</p><br>';
                $cadena = $cadena.'<button value="1"style="margin: 2px" rl="'.$datos[$i]['codEvento'].'" class="btn btn-primary ver">Ver Detalles</button> ';
                if(empty($_SESSION['login'])){
        }else{
                $cadena = $cadena.'<button value="1"style="margin: 2px" rl="'.$datos[$i]['codEvento'].'" class="btn btn-warning btnEditRol">Edit</button><button value="1" rl="'.$datos[$i]['codEvento'].'" style="margin: 2px" class="btn btn-danger btnDelRol">Eli</button> ';
        }
                $cadena = $cadena.'</div></div>';
            }
            $data['select'] = $cadena;
            if(empty($_SESSION['login'])){
             $data['valor'] = "0";   
            }else{
             $data['valor'] = "1";  
           }
            $this->views->getView($this,"eventos",$data);
        }
        
        public function setEventos(){
        $intIdRol = intval($_POST["idEvento"]);
        $strRol= strClean($_POST["txtNombre"]);
        $strDescripcion= strClean($_POST["txtDescripcion"]);
        $intDia= intval($_POST["dia"]);
        $strMes= strClean($_POST["mes"]);
        $intAno= intval($_POST["ano"]);
        
        $option = 0;
        if($intIdRol == 0){
          $request_rol = $this->model->insertEvento($strRol,$strDescripcion,$intDia,$strMes,$intAno);
          $option = 1;
        }else{
          $request_rol = $this->model->updateEvento($intIdRol,$strRol,$strDescripcion,$intDia,$strMes,$intAno);
          $option = 2;
        }
    
        if($request_rol > 0){
            if($option == 1){
            $arrResponse =array('status' => true,'msg'=>'Datos guardados correctamente.');
            }
            else
            {
            $arrResponse =array('status' => true,'msg'=>'Datos Actualizados correctamente.');
        }
          
        }else{
             $arrResponse =array('status' => false,'msg'=>'No es posible almacenar los datos.');
             
        }
        echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
        die();
        }
        
        public function getEvento(int $idrol){
        $intIdrol = intval(strClean($idrol));
        if($intIdrol > 0){
          $arrData = $this->model->selectEvento($intIdrol);
        if(empty($arrData)){
          $arrResponse = array('status' => false,'msg'=>'Datos no encontrados.' ); 
        }else{
          $arrResponse = array('status' => true,'msg'=>$arrData ); 
        }        echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
      }
     die();
        }
        
        public function DelEventos(){
          if($_POST){
           $intIdRol = intval($_POST['idEvento']);
           $requestDelete = $this->model->deleteEvento($intIdRol);
           if($requestDelete == 'ok'){
             $arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el Rol');
           }else if($requestDelete == 'exist'){
            $arrResponse = array('status' => false, 'msg' => 'Error al eliminar el Rol');
           }else{
            $arrResponse = array('status' => false, 'msg' => 'No es posible Eliminar el Rol asociado a usuarios');
           }
           
           echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
          }
          die();
        }
        
        public function loginUser(){
      if($_POST){
        if(empty($_POST['usuario']) || empty($_POST['contra'])){
            $arrResponse = array('status' => false, 'msg' => 'Error de datos');
        }else{
            $strUsuario = strtolower(strClean($_POST['usuario']));
            $strContraseña = strClean($_POST['contra']);
            
            
            $RequestUser = $this->model->loginUser($strUsuario,$strContraseña);
            if(empty($RequestUser)){
             $arrResponse = array('status' => false, 'msg' => 'El Usuario y/o Contraseña son Incorrectos');   
            }else{
                $arrData = $RequestUser;
                    $_SESSION['idUser'] = $arrData['idus'];
                    $_SESSION['login']= true;
                    $arrResponse = array('status' => true, 'msg' => 'ok');  
                
            }
        
        }   
        echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
     }
       die();
    }
    
}
