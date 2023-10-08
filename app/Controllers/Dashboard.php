<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        // Se o usuario estiver logado, ele pode entrar, caso contrario redirecionar para a tela de login
        if (!session()->has('usuario')) {
            return redirect()->route('login');
        }
        echo session()->get('usuario')->nome;
        echo view('admin/dashboard');
    }
}
