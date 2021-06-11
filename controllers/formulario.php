<?php 

class Formulario extends Controllers{
    function __construct()
    {
       parent::__construct();
    }
    function render(){
        $this->views->render('formulario/index');
    }
}