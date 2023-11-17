<?php

namespace Controller;

class Controller{
    var $controllerName;
    var $controllerMethod;
    // method untuk mengambil semua atribute
    public function getControllerAttribute() {
        return [
            "ControllerName" => $this -> controllerName,
            "Method" => $this -> controllerMethod
        ];
    }
}

?>