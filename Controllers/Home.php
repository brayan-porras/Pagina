<?php

class Home extends Controllers {
    public function __construct() {
        parent:: __construct();  
        session_start();
        session_unset();
        session_destroy();
        ; }
    public function home(){
        $data['page_tag']='Home';
        $data['page_title'] = "PAGINA PRINCIPAL";
        $data['page_name']="home";
        
             $data['valor'] = "3";  
           
        $this->views->getView($this,"home",$data);
    }
   
    
    
    
    
}