<?php 
class C_Produtos {
    private $Descricao;
    private $Categoria;
    private $PrecoVenda;
    private $PrecoUnitario;
    private $QtdeEstoque;

    public function setDescricao($Descricao) {
        $this->Descricao = $Descricao;
    }

    public function setCategoria($Categoria) {
        $this->Categoria = $Categoria;
    }

    public function setPrecoVenda($PrecoVenda) {
        $this->PrecoVenda = $PrecoVenda;
    }

    public function setPrecoUnitario($PrecoUnitario) {
        $this->PrecoUnitario = $PrecoUnitario;
    }

    public function setQtdeEstoque($QtdeEstoque) {
        $this->QtdeEstoque = $QtdeEstoque;
    }



    public function getDescricao() {
        return $this->Descricao;
    }

    public function getCategoria() {
        return $this->Categoria;
    }

    public function getPrecoVenda() {
        return $this->PrecoVenda;
    }

    public function getPrecoUnitario() {
        return $this->PrecoUnitario;
    }

    public function getQtdeEstoque() {
        return $this->QtdeEstoque;
    }
}

?>