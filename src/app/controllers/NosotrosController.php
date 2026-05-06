<?php

namespace PAW\app\controllers;


class NosotrosController
{
    public string $viewsDir;

    public function __construct()
    {
        $this->viewsDir = __DIR__ . '/../views/';
    }

    public function mostrar_nosotros()
    {
        require $this->viewsDir . 'nosotros.view.php';
    }
}
