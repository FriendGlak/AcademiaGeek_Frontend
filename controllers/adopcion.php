<?php 

class Adopcion extends Controllers{
    function __construct()
    {
       parent::__construct();
    }
    function render(){
        $this->views->render('adopcion/index');
    }

    function adopta(){
        $this->views->render('adopcion/adopta');
    }
}