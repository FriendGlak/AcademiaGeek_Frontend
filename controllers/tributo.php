<?php 

class Tributo extends Controllers{
    function __construct()
    {
       parent::__construct();
    }
    function render(){
        $this->views->render('tributo/index');
    }
}