<?php 

class Doc_tecnica extends Controllers{
    function __construct()
    {
       parent::__construct();
    }
    function render(){
        $this->views->render('doc_tecnica/index');
    }
}