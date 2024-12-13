<?php 

    class Produto{
        public $ID;
        public $Nome;
        public $Descricao;
        public $qtd;
        public $Marca;
        public $Preco;
        public $Validade;

        function __construct($ID_informado, $Nome_informado, $Descricao_informado, $Marca_informada, $Preco_informada, $Validade_informado){
            $this->ID = $ID_informado;
            $this->Nome = $Nome_informado;
            $this->Descricao = $Descricao_informado;
            $this->Marca = $Marca_informada;
            $this->Preco = $Preco_informada;
            $this->Validade = $Validade_informado;
        }

        
    }
?>
