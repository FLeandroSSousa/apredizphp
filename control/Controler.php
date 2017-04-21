<?php

require_once './connection/conection.php';
require  './classes/Cliente.php';
require './modelo/UsuarioDAO.php';

class Controler {
    public function index(){
        $this->render('index');
    }
    
    /*Cadastro*/
    public function novo(){
    $user = new User();
    $user->setNome($_REQUEST['nome']);
    $user->setCpf($_REQUEST['cpf']);
    $user->setSenha($_REQUEST['senha']);
    
    $this->modelo('UsuarioDAO');
    $idUser = $this->UsuarioDAO->novo($user);
    
    $this->visao->render('user/mensagem_cadastro');
    }
    
}
