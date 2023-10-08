<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Login extends BaseController
{
    public function index()
    {
        echo view('admin/login');
    }

    public function store() {
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');

        $usuario = new UsuarioModel();

        // Procura o usuario no bd
        $usuarioEncontrado = $usuario->where('email', $email)->first();

        // Se não encontrar, redireciona para a pagina de login com uma mensagem de erro
        // fazer mensagem de erro -> with('error', 'Email ou senha incorretos')
        if (!$usuarioEncontrado) {
            return redirect()->route('login');
        }

        // Se encontrar, verifica se a senha está correta
        // Se não estiver, redireciona para a pagina de login com uma mensagem de erro
        // fazer mensagem de erro -> with('error', 'Email ou senha incorretos')
        if ($senha != $usuarioEncontrado->senha) {
            return redirect()->route('login');
        }

        // Vai retirar a senha para armazenar na sessão
        unset($usuarioEncontrado->senha);
        session()->set('usuario', $usuarioEncontrado);

        // Redireciona para o dashbord
        return redirect()->route('dashboard');
    }

    public function logout() {
        // Destroi a sessão
        session()->destroy();

        // Redireciona para a pagina de login
        return redirect()->route('login');
    }
}
