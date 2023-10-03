<?php 

require_once 'FabricaConexao.php';
require_once '../model/C_Clientes.php'; 

class DAOClientes{

    public function Insert(Clientes $c){

        $sql = 'INSERT INTO Clientes (Nome, CPF, Email, Telefone, Endereco) values(?,?,?,?,?)'; 
        $stmt = FabricaConexao::Conexao()->prepare($sql);
        $stmt->bindValue(1,5c->getNome());
        $stmt->bindValue(2,$c->getCPF());
        $stmt->bindValue(3,$c->getTel());
        $stmt->bindValue(4,$c->getEmail()); 
        $stmt->bindValue(5,$c->getEndereco());
        $stmt->execute();

     header("Location:../view/Principal.php");
    }
}
?>