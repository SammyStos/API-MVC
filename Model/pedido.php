<?php 

    class Pedidos{
        public $id_pedido;
        public $numerocliente;
        public $datapedido;
       

        function __construct($id_pedido_informado, $numerocliente_informado, $datapedido_informado){
            $this->id_pedido = $id_pedido_informado;
            $this->numerocliente = $numerocliente_informado;
            $this->datapedido = $datapedido_informado;
           
        }

        
    }
?>
