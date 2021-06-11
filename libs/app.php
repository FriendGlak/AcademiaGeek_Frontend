<?php
require_once 'controllers/errores.php';
class App
{

    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        //cuando se ingresa sin definir controlador
        if (empty($url[0])) {
            $archivoControl = 'controllers/main.php';
            require_once $archivoControl;
            $control = new Main();
            $control->render();
            return false;
        }

        $archivoControl = 'controllers/' . $url[0] . '.php';
        
        //cuando existe un controlador
        if (file_exists($archivoControl)) {
            require_once $archivoControl;

            //inicializa el controlador
            $control = new $url[0];

            //numero de parametros de la url
            $nparam = sizeof($url);

            //si hay un metodo que se requiere cargar
            if ($nparam > 1) {
                if ($nparam > 2) {
                    $param = [];
                    for ($i = 2; $i < $nparam; $i++) {
                        array_push($param, $url[$i]);
                    }
                    $control->{$url[1]}($param);
                } else {
                    $control->{$url[1]}();
                }
            } else {
                $control->render();
            }
        } else {
            $control = new Errores();
        }
    }
}
