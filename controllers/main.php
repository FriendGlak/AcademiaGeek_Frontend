<?php 

class Main extends Controllers{
    function __construct()
    {
       parent::__construct();
    }
    function render(){
        $this->views->render('main/index');
    }

    function saludar(){
        $this->views->render('main/saludar');
    }
}