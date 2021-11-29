<?php


class Himno extends Controllers {
    public function __construct() {
        parent:: __construct();  
        session_start();
         session_unset();
        session_destroy();
        ; }
        public function himno(){
            $data['page_tag']=' Himno';
            
             $data['valor'] = "3";  
           
            $this->views->getView($this,"himno",$data);
        }
    
}
