<?php
//declarações
    class Vendas {

        private Produtos $produtos;
        
        private $quantidade = 0;

        private $desconto = 0;
        //o metodo construct pela inicialização da classe
        public function __construct(){}
        //...............................................
        public function getVenda(){
            
            return $this;
        }

        public function setVenda(array $venda) {
            //solicitação do produto
            $produtos = new Produtos();
            $produto = $produtos->getProduto();
            //se o codigo não encontrar um produto cadastrado no estoque responderá com: "Este produto não existe"
            if(empty($produto)){
                throw new Exception("Este produto não existe");    
            }
            //se a quantidade solicidada da venda for maior que o estoque retorna erro:"Quantidade indisponivel"
            if($venda['quantidade'] < $produto['qntd']){
                throw new Exception("Quantidade indisponivel");
            }
            $o = new Vendas();
            $o->produtos->quantidade -= $venda['quantidade'];
            $o->quantidade = $venda['quantidade'];
            return $this->getVenda();
        }
    }

?>

