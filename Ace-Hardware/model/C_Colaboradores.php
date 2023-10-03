<?php
class C_Colaboradores {
    private $Nome;
    private $CPF;
    private $Email;
    private $Tel;
    private $Endereco;
    private $Cargo;
    private $Salario;

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

    public function setCargo($Cargo) {
        $this->Cargo = $Cargo;
    }

    public function setSalario($Salario) {
        $this->Salario = $Salario;
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

    public function getCargo() {
        return $this->Cargo;
    }

    public function getSalario() {
        return $this->Salario;
    }
}

?>