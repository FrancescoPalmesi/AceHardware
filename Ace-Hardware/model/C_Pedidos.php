<?php 
class C_Pedido {
    private $Produto;
    private $Fornecedor;
    private $dataPedido;
    private $precoUnitario;
    private $Quantidade;
    private $total;
    private $formaDePagamento;

    public function __construct($Produto, $Fornecedor, $dataPedido, $precoUnitario, $Quantidade, $formaDePagamento) {
        $this->Produto = $Produto;
        $this->Fornecedor = $Fornecedor;
        $this->dataPedido = $dataPedido;
        $this->precoUnitario = $precoUnitario;
        $this->Quantidade = $Quantidade;
        $this->total = $precoUnitario * $Quantidade;
        $this->formaDePagamento = $formaDePagamento;
    }



    public function getProduto() {
        return $this->Produto;
    }

    public function getFornecedor() {
        return $this->Fornecedor;
    }

    public function getDataPedido() {
        return $this->dataPedido;
    }

    public function getPrecoUnitario() {
        return $this->precoUnitario;
    }

    public function getQuantidade() {
        return $this->Quantidade;
    }

    public function getTotal() {
        return $this->total;
    }

    public function getFormaDePagamento() {
        return $this->formaDePagamento;
    }
}

?>