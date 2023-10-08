<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Fazer a logica de se o usuario estiver logado, redirecionar para a pagina de admin
        // Senão, redirecionar para a pagina de login
        
        return redirect()->route('login');
    }
}
