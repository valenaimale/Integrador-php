<?php

namespace PAW\app\controllers;


class InicioSesionController
{
    public string $viewsDir;

    public function __construct()
    {
        $this->viewsDir = __DIR__ . '/../views/';
    }

    public function index()
    {
        require $this->viewsDir . 'inicioSesion.view.php';
    }

    public function process()
    {
        $email = $_POST['email'] ?? '';
        $contraseña = $_POST['contraseña'] ?? '';

        // lógica de autenticación
        
        header('Location: /');
        exit;
    }

    public function logout()
    {
        session_destroy();
        header('Location: /');
        exit;
    }
}
