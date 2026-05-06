<?php

namespace PAW\app\controllers;


class PerfilUserController
{
    public string $viewsDir;

    public function __construct()
    {
        $this->viewsDir = __DIR__ . '/../views/';
    }

    public function mostrar()
    {
        require $this->viewsDir . 'perfilUser.view.php';
    }
}
