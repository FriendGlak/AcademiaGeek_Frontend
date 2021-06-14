<?php 

class Producto_Comercial extends Controllers{
    function __construct()
    {
       parent::__construct();
    }
    function render(){
        $this->views->render('producto_comercial/index');
    }
}