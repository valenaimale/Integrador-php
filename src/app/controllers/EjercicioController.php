<?php

namespace PAW\app\controllers;


class EjercicioController
{
    public string $viewsDir;

    public function __construct()
    {
        $this->viewsDir = __DIR__ . '/../views/';
    }

    public function mostrar()
    {
        require $this->viewsDir . 'ejercicio.view.php';
    }
}
