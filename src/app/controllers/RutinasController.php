<?php

namespace PAW\app\controllers;


class RutinasController
{
    public string $viewsDir;

    public function __construct()
    {
        $this->viewsDir = __DIR__ . '/../views/';
    }

    public function listar()
    {
        require $this->viewsDir . 'rutinas.view.php';
    }
}
