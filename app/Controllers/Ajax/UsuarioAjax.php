<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class UsuarioAjax extends BaseController
{
    public function getData()
    {
        $usuario = new UsuarioModel();

        $listaDeUsuario = $usuario->findAll();

        foreach($listaDeUsuario as $usuario){
            $data[] = array(
                'id' => $usuario['id'],
                'nome' => $usuario['nome'],
                'email' => $usuario['email'],
                'cargo' => $usuario['cargo'],
                'ativo' => $usuario['ativo']
            );  
        }

        $usuarios = array(
            'data' => $data
        );

        echo json_encode($usuarios);
    }
}
