<?php

    class Produtos {
        //declarações
        public string $nome;
        public float $preco;
        public int $quantidade;
        //........................

        //o array $data armazena informações do produto
        //poderia verificar se o produto setado existe no banco de dados 
        public function setProdutos(array $data): void {
            //atribuição de valores
            //geralmente o metodo &o salva no banco de dados
            $o = new Produtos();
            $o->nome = $data['nome'];
            $o->preco = $data['preco'];
            $o->quantidade = $data['quantidade'];
        }
        //.....................

        //get recebe o produto (input)
        public function getProduto(): Produtos {
            return $this;
        }
    }

?>