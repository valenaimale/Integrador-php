<?php

namespace PAW\app\controllers;


class HomesinloggedController
{
    public string $viewsDir;

    public function __construct()
    {
        $this->viewsDir = __DIR__ . '/../views/';
    }

    public function index()
    {
        require $this->viewsDir . 'homesinlogged.view.php';
    }
}
