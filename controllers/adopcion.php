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

    function favoritos(){
        $this->views->render('adopcion/favoritos');
    }

    function perfil(){
        $this->views->render('adopcion/perfil');
    }

    function chat(){
        $this->views->render('adopcion/chat');
    }
}