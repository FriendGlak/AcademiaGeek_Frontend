<?php 

class Errores extends Controllers{
    function __construct()
    {
       parent::__construct();
        
    }
    function render(){
        $this->views->render('errores/index');
    }
}