<?php
class C_Fornecedores {
    private $IdFornecedor;
    private $RazaoSocial;
    private $Email;
    private $Endereco;
    private $Cnpj;
    private $INs;

    public function __construct($IdFornecedor, $RazaoSocial, $Email, $Endereco, $Cnpj, $INs) {
        $this->IdFornecedor = $IdFornecedor;
        $this->RazaoSocial = $RazaoSocial;
        $this->Email = $Email;
        $this->Endereco = $Endereco;
        $this->Cnpj = $Cnpj;
        $this->INs = $INs;
    }

    public function getIdFornecedor() {
        return $this->IdFornecedor;
    }

    public function getRazaoSocial() {
        return $this->RazaoSocial;
    }

    public function getEmail() {
        return $this->Email;
    }

    public function getEndereco() {
        return $this->Endereco;
    }

    public function getCnpj() {
        return $this->Cnpj;
    }

    public function getINs() {
        return $this->INs;
    }
}

?>