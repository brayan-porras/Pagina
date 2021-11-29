<?php


class Nosotros extends Controllers {
    public function __construct() {
        parent:: __construct();  
        session_start();
         session_unset();
        session_destroy();
        ; }
        public function nosotros(){
            $data['page_tag']=' Nosotros';
           
             $data['valor'] = "3";  
           
            $this->views->getView($this,"nosotros",$data);
        }
    
}
