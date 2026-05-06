<?php

namespace PAW\app\controllers;


class CrearcuentaGymController
{
    public string $viewsDir;

    public function __construct()
    {
        $this->viewsDir = __DIR__ . '/../views/';
    }

    public function crear()
    {
        require $this->viewsDir . 'crearcuenta-gym.view.php';
    }
}
