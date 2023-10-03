<?php 
class C_Clientes {
    private $Nome;
    private $CPF;
    private $Email;
    private $Endereco;
    private $Tel

    // metodos setters

    public function setNome($Nome) {
        $this->Nome = $Nome;
    }

    public function setCPF($CPF) {
        $this->CPF = $CPF;
    }

    public function setEmail($Email) {
        $this->Email = $Email;
    }

    public function setTel($Tel) {
        $this->Tel = $Tel;
    }

    public function setEndereco($Endereco) {
        $this->Endereco = $Endereco;
    }

    // metodos getters

    public function getNome() {
        return $this->Nome;
    }

    public function getCPF() {
        return $this->CPF;
    }

    public function getEmail() {
        return $this->Email;
    }

    public function getTel() {
        return $this->Tel;
    }

    public function getEndereco() {
        return $this->Endereco;
    }
}

?>
