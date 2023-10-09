<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class Usuario extends BaseController
{
    public function index()
    {
        // Fazer a logica de se o usuario estiver logado, redirecionar para a pagina de admin
        // Senão, redirecionar para a pagina de login
        
        return redirect()->route('login');
    }

    public function readUser()
    {
        // Se o usuario estiver logado, ele pode entrar, caso contrario redirecionar para a tela de login
        if (!session()->has('usuario')) {
            return redirect()->route('login');
        }

        $usuario = new UsuarioModel();

        $listaDeUsuario = $usuario->findAll();

        echo view('admin/tabelaUsuarios', [
            'titulo' => 'Tabela de Usuários',
            'lista' => $listaDeUsuario
        ]);
    }

    public function changeRole()
    {
        // Se o usuario estiver logado, ele pode entrar, caso contrario redirecionar para a tela de login
        if (!session()->has('usuario')) {
            return redirect()->route('login');
        }

        $usuario = new UsuarioModel();

        $id = $this->request->getPost('id');
        $cargo = $this->request->getPost('cargo');

        $usuario->update($id, [
            'cargo' => $cargo
        ]);

        echo '<pre>';
        var_dump($id);
        var_dump($cargo);
        echo '</pre>';

        //return redirect()->route('tabela.usuarios');
    }
}
