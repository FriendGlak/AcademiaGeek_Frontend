<?php 

class Calendario extends Controllers{
    function __construct()
    {
       parent::__construct();
    }
    function render(){
        $this->views->render('calendario/index');
    }
}