<?php

class Cliente {
    private $iduser = null;
    private $cpfuser = null;
    private $senha = null;
    
    public function _construct(){
        
    }
    function getId_nome() {
        return $this->id_nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getSenha() {
        return $this->senha;
    }

    function setId_nome($id_nome) {
        $this->id_nome = $id_nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

 
}

