<?php

namespace App\Controllers;

use App\Models\ProdutoModel;

class Produto extends BaseController
{
    public function readProduct()
    {
        // Se o usuario estiver logado, ele pode entrar, caso contrario redirecionar para a tela de login
        if (!session()->has('usuario')) {
            return redirect()->route('login');
        }

        $produtos = new ProdutoModel();

        $listaDeProdutos = $produtos->findAll();

        echo view('admin/tables', [
            'listaDeProdutos' => $listaDeProdutos
        ]);
    }

    public function showForms() {
        // Se o usuario estiver logado, ele pode entrar, caso contrario redirecionar para a tela de login
        if (!session()->has('usuario')) {
            return redirect()->route('login');
        }
        echo view('admin/adicionarProdutos');
    }

    public function addProduct() {
        // Se o usuario estiver logado, ele pode entrar, caso contrario redirecionar para a tela de login
        if (!session()->has('usuario')) {
            return redirect()->route('login');
        }

        $produtos = new ProdutoModel();

        $produtos->insert([
            'prod_nome' => $this->request->getPost('nome'),
            'prod_preco' => $this->request->getPost('preco'),
            'prod_marca' => $this->request->getPost('marca'),
            'prod_quantidade' => $this->request->getPost('quantidade')
        ]);

        return redirect()->route('tabela.produtos');
    }
}
