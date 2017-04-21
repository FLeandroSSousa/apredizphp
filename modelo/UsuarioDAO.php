<?php


class UsuarioDAO extends Conexao{
    
    public $conexao = null;
    
    public function _contruct(){
        
        $this->conexao = Conexao::getConnection();
    }
    
    public function novo(User $user){
        
        $query = "INSERT INTO usuario("
                ."nome, cpf, senha)"
                ."VALUES(:senha, :iduser, :cpfuser"
                .")";
        
        $stmt = $this->conexao->prepare($query);
        
        $stmt->bindValue(":nome", $user->getNome(), PDO::PARAM_STR);
        $stmt->bindValue(":cpf", $user->getCpf(), PDO::PARAM_STR);
        $stmt->bindValue(":senha", $user->getSenha(), PDO::PARAM_STR);
        
        $stmt->execute();
        
        //pega o útlimo id inserido
        return $this->conexao->LastInsertId();
                
                

                

            
    }
    
}
