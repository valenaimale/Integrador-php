<?php

namespace PAW\app\controllers;


class RutinaIndController
{
    public string $viewsDir;

    public function __construct()
    {
        $this->viewsDir = __DIR__ . '/../views/';
    }

    public function mostrar()
    {
        require $this->viewsDir . 'rutina_ind.view.php';
    }
}
