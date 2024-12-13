<?php 

    class Cliente{
        public $Id;
        public $Nome;
        public $Endereco;
        public $CPF;
        public $Telefone;
        public $Email;
        public $DataNascimento;
      

        function __construct($Id_informado, $Nome_informado, $Endereco_informado, $CPF_informado, $Telefone_informada, $Email_informada, $DataNascimento_informado){
            $this->Id = $Id_informado;
            $this->Nome = $Nome_informado;
            $this->Endereco = $Endereco_informado;
            $this->CPF = $CPF_informado;
            $this->Telefone = $Telefone_informada;
            $this->Email = $Email_informada;
            $this->DataNascimento = $DataNascimento_informado;
         
        }

        
    }
?>
