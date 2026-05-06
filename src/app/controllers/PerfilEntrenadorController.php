<?php

namespace PAW\app\controllers;


class PerfilEntrenadorController
{
    public string $viewsDir;

    public function __construct()
    {
        $this->viewsDir = __DIR__ . '/../views/';
    }

    public function mostrar()
    {
        require $this->viewsDir . 'perfilEntrenador.view.php';
    }
}
